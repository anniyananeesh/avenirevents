<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_settings_management extends CI_Model{
		
		private $table_name = TBL_ADMIN_SETTINGS;
                private $table_timing = TBL_TIMINGS;
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
                
/*
|--------------------------------------------------------------------------
| This function Insert a Record
|--------------------------------------------------------------------------
*/
		public function insertTiming($data_array, $id) {
			$this->db->insert($this->table_timing, $data_array);
			$last_insert_id = mysql_insert_id();
			return $last_insert_id;	
                        
                }
/*          
|--------------------------------------------------------------------------
| This function gets timing Record
|--------------------------------------------------------------------------
*/
		public function getTiming(){
 
			$this->db->select("*");
			$this->db->from($this->table_timing);
			$query = $this->db->get();
			return $query->result();
		}     

/*
|--------------------------------------------------------------------------
| This function Delete a Record
|--------------------------------------------------------------------------
*/
		public function deleteTiming($id) {
			$this->db->where('id', $id);
			$this->db->delete($this->table_timing);
		}
                
                public function get_timings_by_wkday($wk_sl)
                {
                    $this->db->select("*");
                    $this->db->from($this->table_timing);
                    $this->db->where(array('weekday'=>$wk_sl));
                    $query = $this->db->get();
                    return $query->result();
                }
                
	}//class