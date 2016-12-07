<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_newsletter extends MY_Model{
            
		protected $table_name = TBL_SUBSRIBERS ;
                
                public function save( $save)
                { 
                    return $this->db->insert($this->table_name, $save);	
                }
                
}