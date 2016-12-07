<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_services extends MY_Model{
		
		protected $table_name = TBL_SERVICES;
/*
|--------------------------------------------------------------------------
| This function Returns Random Country for Footer
|--------------------------------------------------------------------------
*/
		public function get_randomy(){
			/*$this->db->select('*');
			$this->db->from($this->table_name);
			$this->db->where('is_active', 'Y');
			$this->db->order_by('id', 'RANDOM');
			$this->db->limit(8, 0);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();*/
		}
                
                public function get_details_by_name($name)
                {
                    $name = mysql_real_escape_string($name);			
                    $this->db->select("*");
                    $this->db->from($this->table_name);
                    $this->db->where('heading_en', $name);
                    $query = $this->db->get();
                    return $query->row();
                }
				
	}//class