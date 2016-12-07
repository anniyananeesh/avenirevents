<?php

class Model_languages extends CI_Model{

	protected $table_name = TBL_LANGUAGE;

	function __construct(){
		parent::__construct();
	}

	function get_language(){

		$req_uri = $_SERVER["REQUEST_URI"];
		$url_arr = explode("/",$req_uri);

		$language = trim($url_arr[2]);

		if ($language == ""){
			return "ar";
		} else{

				if ($language =="en"){
	          return "en";
				}else if ($language =="ar"){
		        return "ar";
				}else if ($language =="fr"){
		        return "fr";
				}else{
					return "en";
				}

		}

		return $url_arr[2];

	}

	function getAllLanguages()
	{
		$this->db->select('*')
				 ->from($this->table_name)
				 ->where(array('is_active'=>'Y'));
		$this->db->order_by('orderby','ASC');
		$query = $this->db->get();

		return ($query->num_rows()>0) ? $query->result() : FALSE;
	}

}

?>
