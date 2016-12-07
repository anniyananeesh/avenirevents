<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_contents extends CI_Model{
		
		private $table_name = TBL_CONTENTS;
/*
|--------------------------------------------------------------------------
| This function return record details
|--------------------------------------------------------------------------
*/
		public function get_details($id){
			$id = mysql_real_escape_string($id);			
			$this->db->select("*");
			$this->db->from($this->table_name);
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->row();
		}	

                /*
|--------------------------------------------------------------------------
| This function return record details
|--------------------------------------------------------------------------
*/
		public function get_details_by_title($title){
			$title = mysql_real_escape_string(urldecode($title));			
			$this->db->select("*");
			$this->db->from($this->table_name);
			$this->db->where('heading_en', $title);
			$query = $this->db->get();
			return $query->row();
		}	
                
/*
|--------------------------------------------------------------------------
| This function return record details by parent id
|--------------------------------------------------------------------------
*/
		public function get_details_by_parentId($id){
			$id = mysql_real_escape_string($id);			
			$this->db->select("*");
			$this->db->from($this->table_name);
			$this->db->where('parent_id', $id);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result_array();
		}
/*
|--------------------------------------------------------------------------
| This function return related pages
|--------------------------------------------------------------------------
*/
		public function get_pages($id){
			$id = mysql_real_escape_string($id);			
			$this->db->select("*");
			$this->db->from($this->table_name);
			$this->db->where(array('parent_id'=>$id, 'is_active'=>'Y'));
			$this->db->order_by('orderby', 'ASC');
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();
		}		

		
				
	}//class