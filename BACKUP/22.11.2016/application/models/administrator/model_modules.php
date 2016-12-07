<?php

	class Model_modules extends CI_Model {
		private $table_name = TBL_ADMIN_MODULES;
/*
|--------------------------------------------------------------------------
| Return Management Modules according to User Types
|--------------------------------------------------------------------------
*/			
		public function get_modules($user_id, $user_type){
			
			$user_id = mysql_real_escape_string($user_id);
			$user_type = mysql_real_escape_string($user_type);
			
			$this->db->select('*');
			$this->db->from($this->table_name." AS t1");
			if ($user_type=='SA'){
				$this->db->join(TBL_ADMIN_RIGHTS." AS t2", 't2.module_id = t1.id');
				$this->db->where('t2.user_id', $user_id);
			}			
			$query = $this->db->get();
			//print($this->db->last_query())."<br>";
			return $query->result();
		}
/*
|--------------------------------------------------------------------------
| Return Management Modules according to User Types
|--------------------------------------------------------------------------
*/			
		public function get_module_info($folder_name){
			
			$folder_name = mysql_real_escape_string($folder_name);

			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->where('folder', $folder_name);			
			
			$query = $this->db->get();
			return $query->row();
		}
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
| This function return all modules
|--------------------------------------------------------------------------
*/
		public function get_all_modules(){
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->order_by('module_name', 'ASC');
			$query = $this->db->get();
			return $query->result();
		}
/*
|--------------------------------------------------------------------------
| This function Returns all the records
|--------------------------------------------------------------------------
*/
		public function get_all_records($param_array, $limit, $offset, $sort, $by){
			$this->db->select('*');
			$this->db->from($this->table_name);
			if (isset($param_array)){
				$this->db->where($param_array);
			}
			$this->db->limit($limit, $offset);
			$this->db->order_by($sort, $by);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();
		}
/*
|--------------------------------------------------------------------------
| This function Returns Total Records
|--------------------------------------------------------------------------
*/
		public function countTotal($param_array){
			$this->db->select('*');
			$this->db->from($this->table_name);	
			if (isset($param_array)){
				$this->db->where($param_array);
			}		
			$query = $this->db->get();
			return $query->num_rows();
		}	
/*
|--------------------------------------------------------------------------
| This function Returns All Records for Search
|--------------------------------------------------------------------------
*/
		public function auto_complete_data_for_search(){
			$this->db->select('*');
			$this->db->from($this->table_name);			
			$query = $this->db->get();
			return $query->result_array();
		}		
/*
|--------------------------------------------------------------------------
| This function Check if the Record Already Exists
|--------------------------------------------------------------------------
*/
		public function isExist($param_array) {
			$this->db->select('id');
			$this->db->from($this->table_name);
			$this->db->where($param_array);
			$query = $this->db->get();

			return ($query->num_rows() > 0 ? TRUE : FALSE);						
		}
/*
|--------------------------------------------------------------------------
| This function Return the Last Orderby ID
|--------------------------------------------------------------------------
*/
		public function lastOrderID() {
			$this->db->select_max('orderby');
			$this->db->from($this->table_name);
			$query = $this->db->get();			
			return $query->row();
		}
/*
|--------------------------------------------------------------------------
| This function Insert Record In Database
|--------------------------------------------------------------------------
*/
		public function insertRecord($data_array) {
			$this->db->insert($this->table_name, $data_array);
			$last_insert_id = mysql_insert_id();
			return $last_insert_id;	
		}

/*
|--------------------------------------------------------------------------
| This function Delete a Record
|--------------------------------------------------------------------------
*/
		public function deleteRecord($id) {
			$this->db->where('id', $id);
			$this->db->delete($this->table_name);
		}				
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
| This function return Details for Delete portion
|--------------------------------------------------------------------------
*/
		public function get_one_record_for_delete($id){
			$id = mysql_real_escape_string($id);			
			$this->db->select("*");
			$this->db->from($this->table_name);
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->result();
		}	
/*
|--------------------------------------------------------------------------
| This function Returns Records for Delete
|--------------------------------------------------------------------------
*/
		public function get_all_records_for_delete($param_array){
			$this->db->select('*');
			$this->db->from($this->table_name);
			if (isset($param_array)){
				$this->db->where_in('id', $param_array);
			}
			$this->db->order_by('added_date', 'DESC');
			$query = $this->db->get();			
			//print($this->db->last_query());
			return $query->result();
		}		
/*
|--------------------------------------------------------------------------
| This function deletes a table from database
|--------------------------------------------------------------------------
*/
		public function droptable($tablename){
			$this->load->dbforge();
			$this->dbforge->drop_table($tablename);
		}

			
	}