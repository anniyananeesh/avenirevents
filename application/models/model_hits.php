<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model_hits extends CI_Model{
		
		private $table_name = TBL_HITS;
/*
|--------------------------------------------------------------------------
| This function Returns all the records
|--------------------------------------------------------------------------
*/
		public function new_visit(){
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1,0);
			$query = $this->db->get();
			$result = $query->row_array();
			
			$first_row_id  = $result["id"];
			$old_hits  = $result["hits"];
			$old_visits  = $result["visits"];
			$today_date_db = $result["today_date"];
			$date_today    = date("Y-m-d");
			
			
			if ($today_date_db == $date_today){
				$this->db->where('id', $first_row_id);
				$this->db->update($this->table_name, array('visits'=>$old_visits+1, 'hits'=>$old_hits+1));
			}else{
				$insertArray = array('hits'=>'1', 'visits'=>'1', 'today_date'=>$date_today, 'is_active'=>'Y', 'added_date'=>date("Y-m-d H:i:s"));
				$this->db->insert($this->table_name, $insertArray);				
			}
		}
		
		
		function new_hit() {
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1,0);
			$query = $this->db->get();
			$result = $query->row_array();
			
			$first_row_id  = $result["id"];
			$old_hits  = $result["hits"];
			$today_date_db = $result["today_date"];
			$date_today    = date("Y-m-d");
			
			if ($today_date_db == $date_today){
				$this->db->where('id', $first_row_id);
				$this->db->update($this->table_name, array('visits'=>$old_visits+1, 'hits'=>$old_hits+1));
			}
		}
		
		
		/*function new_visit() {
			
			$query = "SELECT id,today_date FROM ".TBL_HITS." ORDER BY id DESC LIMIT 0,1 ";
			$data = $this->cf->selectMultiRecords($query);
			
			$first_row_id = $data[0]["id"];
			$today_date_db = $data[0]["today_date"];
			$date_today = date("Y-m-d");
			
			if ($today_date_db == $date_today){
				$query_update = "UPDATE ".TBL_HITS." SET visits=visits+1, hits=hits+1 WHERE id=$first_row_id ";
				$this->cf->update($query_update);
			}else{
				$query_insert = "INSERT INTO ".TBL_HITS." (`hits`,`visits`,`today_date`,`is_active`,`added_date`) VALUES ('1','1','".$date_today."','Y',NOW()) ";
				$this->cf->insertInto($query_insert);
			}
		}
		
		function new_hit() {
			
			$query = "SELECT id,today_date FROM ".TBL_HITS." ORDER BY id DESC LIMIT 0,1 ";
			$data = $this->cf->selectMultiRecords($query);
			
			$first_row_id = $data[0]["id"];
			$today_date_db = $data[0]["today_date"];
			$date_today = date("Y-m-d");
			
			if ($today_date_db == $date_today){
				$query_update = "UPDATE ".TBL_HITS." SET hits=hits+1 WHERE id=$first_row_id ";
				$this->cf->update($query_update);
			}
		}
		
		function get_today_visits(){
			$date_today = date("Y-m-d");
			$query_hits = "SELECT visits FROM ".TBL_HITS." WHERE today_date='".$date_today."' ";
			$data_hits  = $this->cf->selectMultiRecords($query_hits);
			return $data_hits;
		}
		function get_today_hits(){
			$date_today = date("Y-m-d");
			$query_hits = "SELECT hits FROM ".TBL_HITS." WHERE today_date='".$date_today."' ";
			$data_hits  = $this->cf->selectMultiRecords($query_hits);
			return $data_hits;
		}
		function get_total_hits(){
			$query_hits = "SELECT sum(hits) as total_hits FROM ".TBL_HITS;
			$data_hits  = $this->cf->selectMultiRecords($query_hits);
			return $data_hits;
		}
		function get_total_visits(){
			$query_hits = "SELECT sum(visits) as total_visits FROM ".TBL_HITS;
			$data_hits  = $this->cf->selectMultiRecords($query_hits);
			return $data_hits;
		}*/
				
	}
?>