<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_company extends MY_Model{

		protected $table_name = TBL_COMPANY;
		protected $_lang_tbl = TBL_COMPANY_LANGUAGE;

		public function hasUsername($where)
    {
        $user = $this->get_detail($where);
        return ($user) ? TRUE : FALSE;
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
    	  $username = $this->security->xss_clean($credentials['email']);
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
			        				'name' => $this->encrypt->encode($usr->name),
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


	public function get_languages()
 	{
	 		$this->db->select('language');
	 		$this->db->distinct('language');
	 		$this->db->where("is_active = 'Y'");
	 		$query = $this->db->get($this->table_name);
	 		return ($query->num_rows() > 0) ? $query->result() : false;
 	}


 	public function setLanguage($companyId, $languageId)
 	{
	 		$save_lang = array(
	 			'company_id' => $companyId,
	 			'language_id' => $languageId
	 		);

	 		return $this->db->insert($this->_lang_tbl, $save_lang);
 	}

 	public function getLanguageByModel($companyId)
 	{
	 		$this->db->select(TBL_LANGUAGE.'.name_en,'.TBL_LANGUAGE.'.id')
	 				 ->from($this->_lang_tbl)
	 				 ->where(array('company_id'=>$companyId));

	 		$this->db->join(TBL_LANGUAGE, TBL_LANGUAGE.'.id = '.$this->_lang_tbl.'.language_id','INNER');
	 		$query = $this->db->get();
	 		return ($query->num_rows() > 0) ? $query->result() : FALSE;
 	}

 	public function removeLangByModel($companyId)
 	{
 		$this->db->where('company_id', $companyId);
		return $this->db->delete($this->_lang_tbl);
 	}

	//Company images management
	public function getCompanyPicsByPk($id)
 	{
	 		$this->db->select('id,image')
	 				 ->from(TBL_COMPANY_IMAGES)
	 				 ->where("company_fk = $id")
	 				 ->order_by('id','ASC');
	 		$query = $this->db->get();

	 		return ($query->num_rows()>0) ? $query->result() : false;
 	}

 	public function save_photos($save)
 	{
 			return $this->db->insert(TBL_COMPANY_IMAGES, $save);
 	}

 	public function deleteCompanyPhoto($modelId, $photo)
 	{
	 		$where = array(
	 			'image' => $photo,
	 			'company_fk' => $modelId
	 		);

	 		$this->db->where($where);
			return $this->db->delete(TBL_COMPANY_IMAGES);
 	}

	public function updateCompanyPics($save)
 	{
 			return $this->db->insert(TBL_COMPANY_IMAGES, $save);
 	}

}
