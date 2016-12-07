<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_admin_user extends CI_Model{
		private $table_name = TBL_ADMIN_USERS;
/*
|--------------------------------------------------------------------------
| This function authenticate where the user exists, block or deactive.
|--------------------------------------------------------------------------
*/
		public function authenticate($username, $password) {
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$password = $password; //sha1($this->config->item("salt").$password.$this->config->item("salt"));

			$this->db->select('id, is_block, is_active');
			$this->db->from($this->table_name);
			$this->db->where(array('username'=>$username, 'password'=>$password));
			$query = $this->db->get();

			if ($query->num_rows() > 0){
				$result = $query->row();
				if ($result->is_block=="Y"){
					return "B"; // Blocked
				}
				if ($result->is_active=="N"){
					return "S"; // Suspended by Admin
				}
				if ($result->is_block=="N" and $result->is_active=="Y"){
					return "Y"; // User Exists
				}
			}else{
				return "N"; // User does not exists
			}
		}
/*
|--------------------------------------------------------------------------
| Return Admin User Information
|--------------------------------------------------------------------------
*/
		public function get_user_info($username, $password){
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$password = sha1($this->config->item("salt").$password.$this->config->item("salt"));
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->where(array('username'=>$username, 'password'=>$password));
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
			$this->db->where('is_prog', 'N');
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
| This function Update a Record
|--------------------------------------------------------------------------
*/
		public function updateRecord($data_array, $id) {
			$this->db->where(array('id'=>$id, 'is_default'=>'N', 'is_prog'=>'N'));
			$this->db->update($this->table_name, $data_array);
			//print($this->db->last_query());
		}

		public function updateRec($data_array, $id) {
			$this->db->where(array('id'=>$id));
			$this->db->update($this->table_name, $data_array);
			//print($this->db->last_query());
		}
/*
|--------------------------------------------------------------------------
| This function Updates new password
|--------------------------------------------------------------------------
*/
		public function updatePassword($data_array, $email){
			$this->db->where('email', $email);
			$this->db->update($this->table_name, $data_array);
		}
/*
|--------------------------------------------------------------------------
| This function Delete a Record
|--------------------------------------------------------------------------
*/
		public function deleteRecord($id) {
			$this->db->where(array('id'=>$id, 'is_default'=>'N', 'is_prog'=>'N'));
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
			$this->db->where(array('id'=>$id));
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
| This function Insert Rights
|--------------------------------------------------------------------------
*/
		public function insertRights($data_array) {
			$this->db->insert(TBL_ADMIN_RIGHTS, $data_array);
		}
/*
|--------------------------------------------------------------------------
| This function get user rights
|--------------------------------------------------------------------------
*/
		public function getRights($user_id) {
			$this->db->select('module_id');
			$this->db->from(TBL_ADMIN_RIGHTS);
			$this->db->where('user_id', $user_id);
			$query = $this->db->get();
			$data = $query->result();

			$rights = array();
			$a=0;
			foreach ($data as $key=>$value){
				$rights[$a] = $value->module_id;
				$a++;
			}
			return $rights;
		}
/*
|--------------------------------------------------------------------------
| This function Delete a Record
|--------------------------------------------------------------------------
*/
		public function deleteRights($id) {
			$this->db->where('user_id', $id);
			$this->db->delete(TBL_ADMIN_RIGHTS);
		}
/*
|--------------------------------------------------------------------------
| This function Returns Admin Users
|--------------------------------------------------------------------------
*/
		public function get_all_admin_users(){
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->order_by('full_name', 'ASC');
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();
		}

	}//class Model_admin_user

?>
