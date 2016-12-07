<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_settings extends CI_Model{
		
		private $table_name = TBL_ADMIN_SETTINGS;
/*
|--------------------------------------------------------------------------
| This function Update a Record
|--------------------------------------------------------------------------
*/
		public function updateRecord($data_array, $id) {
			$this->db->where('id', $id);
			$this->db->update($this->table_name, $data_array);
		}	
/*
|--------------------------------------------------------------------------
| This function return record details
|--------------------------------------------------------------------------
*/
		public function get_details(){
			$this->db->select("*");
			$this->db->from($this->table_name);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->row();
		}	
		
				
	}//class