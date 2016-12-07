<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_country extends MY_Model{
		
		protected $table_name = TBL_COUNTRY;
		protected $table_city = TBL_CITY;
/*
|--------------------------------------------------------------------------
| This function Returns all category
|--------------------------------------------------------------------------
*/
		public function get_all_country(){
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->where('is_active', 'Y');
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();
		}
/*
|--------------------------------------------------------------------------
| This function Returns City
|--------------------------------------------------------------------------
*/
		public function get_city($country_id){
			$this->db->select('*');
			$this->db->from($this->table_city);
			$this->db->where(array('is_active'=>'Y', 'country_id'=>$country_id));
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();
		}
		
		public function get_city_name($id){
			$id = mysql_real_escape_string($id);			
			$this->db->select("*");
			$this->db->from($this->table_city);
			$this->db->where('id', $id);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->row();
		}


/*
|--------------------------------------------------------------------------
| This function Returns Random Country for Footer
|--------------------------------------------------------------------------
*/
		public function get_random_country(){
			$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->where('is_active', 'Y');
			$this->db->order_by('id', 'RANDOM');
			$this->db->limit(8, 0);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();
		}






				
	}//class