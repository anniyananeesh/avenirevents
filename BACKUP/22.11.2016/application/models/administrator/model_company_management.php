<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_company_management extends MY_Model{
	
	protected $table_name = TBL_COMPANY;
	
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
	
}