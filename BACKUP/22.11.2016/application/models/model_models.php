<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_models extends MY_Model{

	protected $table_name = TBL_MODELS;
	protected $_lang_tbl = TBL_LANGUAGE_MODELS;

 	public function genUniqCode()
 	{
 		$this->db->select('code')
 				 ->from($this->table_name)
 				 ->limit(1);

 		$this->db->order_by('id','DESC');
 		$query = $this->db->get();

 		if($query->num_rows()>0)
 		{

 			$result = $query->result();
 			return ++$result[0]->code;

 		}else{
 			return '4110001';
 		}
 	}

 	public function updateModelPics($save)
 	{
 		return $this->db->insert(TBL_MODEL_IMAGES, $save);
 	}

 	//Perform search for models based on the query
 	public function findModels($qry, $limit = 8, $offset = 0)
 	{

 		//$this->output->enable_profiler(TRUE);

 		$this->db->select('*')
 		 		 ->from(array($this->table_name, $this->_lang_tbl))
 		 		 ->limit($limit,$offset);
 		$this->db->where($this->table_name.".is_active = 'Y'");

 		if($qry['age_from'] != '' && $qry['age_to'] != '')
 		{
 			$start = $qry['age_from'];
 			$end = $qry['age_to'];

 			$this->db->where($this->table_name.".age BETWEEN '$start' AND '$end'");
 		}

 		if($qry['country'] != "")
 		{
 			$country = $qry['country'];
 			$this->db->where($this->table_name.".country = '$country'");
 		}

        if($qry['gender'] != "")
        {
            $gender = $qry['gender'];
            $this->db->where($this->table_name.".gender = '$gender'");
        }

        if($qry['height'] != "")
        {
            $height = $qry['height'];
            $this->db->where($this->table_name.".height <= '$height'");
        }

        if($qry['bust'] != "")
        {
            $this->db->where($this->table_name.".bust = '".$qry['bust']."'");
        }

        if($qry['waist'] != "")
        {
            $this->db->where($this->table_name.".waist = '".$qry['waist']."'");
        }

        if($qry['hips'] != "")
        {
            $this->db->where($this->table_name.".hips = '".$qry['hips']."'");
        }


 		if(count($qry['l']) > 0)
 		{
 			$language = $qry['l'];
 			$rep_where = '(';

 			foreach ($language as $key => $value) {
 				$rep_where.= $this->_lang_tbl.'.language_id = '.$value;

 				if(count($language) - 1 > $key)
 				{
 					$rep_where.= ' OR ';
 				}
 			}
 			$rep_where.= ') ';

 			$this->db->where($rep_where);
			$this->db->where($this->table_name.'.id = '.$this->_lang_tbl.'.model_id');

 			$this->db->join(TBL_LANGUAGE,TBL_LANGUAGE.'.id = '.$this->_lang_tbl.'.language_id','INNER');
 		}

 		$this->db->group_by($this->table_name.'.id');

 		$query = $this->db->get();

 		if($query->num_rows() > 0)
 		{
 			return $query->result();
 		}else{
 			return false;
 		}

 	}

 	//Get profile picture of model
 	//Profile picture the first picture uploaded by the user
 	public function getProfilePicByCode($code)
 	{
 		$model = parent::get_detail(array('code'=>$code));

 		$photos = self::getModelPicsByPk($model->id);
 		$profilePic = ($photos) ? $photos[0] : FALSE;

 		return ($profilePic) ? $profilePic->image : FALSE;
 	}

 	public function getModelPicsByPk($id)
 	{
 		$this->db->select('id,image')
 				 ->from(TBL_MODEL_IMAGES)
 				 ->where("model_fk = $id")
 				 ->order_by('id','ASC');
 		$query = $this->db->get();

 		return ($query->num_rows()>0) ? $query->result() : false;
 	}

 	public function save_photos($save)
 	{
 		return $this->db->insert(TBL_MODEL_IMAGES, $save);
 	}

 	public function deleteModelPhoto($modelId, $photo)
 	{
 		$where = array(
 			'image' => $photo,
 			'model_fk' => $modelId
 		);

 		$this->db->where($where);
		return $this->db->delete(TBL_MODEL_IMAGES);
 	}

 	public function get_languages()
 	{
 		$this->db->select('language');
 		$this->db->distinct('language');
 		$this->db->where("is_active = 'Y'");
 		$query = $this->db->get($this->table_name);
 		return ($query->num_rows()>0) ? $query->result() : false;
 	}


 	public function setLanguage($modelId, $languageId)
 	{
 		$save_lang = array(
 			'model_id' => $modelId,
 			'language_id' => $languageId
 		);

 		return $this->db->insert($this->_lang_tbl, $save_lang);
 	}

 	public function getLanguageByModel($modelId)
 	{
 		$this->db->select(TBL_LANGUAGE.'.name_en,'.TBL_LANGUAGE.'.id')
 				 ->from($this->_lang_tbl)
 				 ->where(array('model_id'=>$modelId));

 		$this->db->join(TBL_LANGUAGE, TBL_LANGUAGE.'.id = '.$this->_lang_tbl.'.language_id','INNER');
 		$query = $this->db->get();
 		return ($query->num_rows() > 0) ? $query->result() : FALSE;
 	}

 	public function removeLangByModel($modelId)
 	{
 		$this->db->where('model_id', $modelId);
		return $this->db->delete($this->_lang_tbl);
 	}

 	public function hasUsername($username)
 	{
 		$model = parent::get_detail(array('username'=>mysql_real_escape_string($username)));
 		return ($model) ? TRUE : FALSE;
 	}

 	public function genUniqToken($username)
    {
        $token = time() . rand(10, 5000) . sha1(rand(10, 5000)) . md5(__FILE__);
        $token = str_shuffle($token);
        $token = sha1($token) . md5(microtime()) . md5($username);
        return $token;
    }

    public function genhashKey($password, $token)
    {
        return md5(md5($token) . md5($password));
    }

    public function genRandomPwd($length = 12)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789#$";
        $password = substr( str_shuffle( $chars ), 0, $length );
	    return $password;
    }

    public function authUsr($credentials)
    {
        $username = $this->security->xss_clean($credentials['username']);
        $password = $this->security->xss_clean($credentials['pwd']);

        $where = array(
            'username' => $username
        );

        $usr = $this->get_detail($where);

        if($usr)
        {
            if($usr->is_active == 'Y')
            {

                if($this->genhashKey($password, $usr->uniq_token) == $usr->hash_key)
                {

                    $data['logged'] = array(
                        'user_id' => $this->encrypt->encode($usr->id),
                        'name' => $this->encrypt->encode($usr->first_name.' '.$usr->last_name),
                        'type' => 'company'
                    );

                    $this->session->set_userdata($data);

                    return 'authenticated';

                }else{
                    return 'check_password';
                }

            }else{
                return 'account_blocked';
            }

        }else{

            return 'no_user';

        }

    }

    public function rstUsrPwd($username)
    {

        $where = array(
            'username' => $username
        );

        $usr = $this->get_detail($where);

        if($usr)
        {
            $rnDmPwd = $this->genRandomPwd();
            $uniqTkn = $this->genUniqToken($username);
            $hashKey = $this->genhashKey( $rnDmPwd, $uniqTkn);

            $data_array = array(
              $this->table_name.'.hash_key' => $hashKey,
              $this->table_name.'.uniq_token' => $uniqTkn,
              $this->table_name.'.r_password' => $rnDmPwd
            );

            $this->updateRecord($data_array, $usr->id);
            return $rnDmPwd;

        }else{
            return 'no_user';
        }
    }

    public function checkPwdHash($userId, $pwd)
    {
        $userDetails = parent::get_detail(array('id'=>$userId));
        $currPwdhashKey = $this->genhashKey($pwd, $userDetails->uniq_token);
        return ($currPwdhashKey === $userDetails->hash_key) ? true: false;
    }

}
