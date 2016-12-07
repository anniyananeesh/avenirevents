<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_gallery_images extends MY_Model{
		
		protected $table_name = TBL_GALLERY_IMAGES;
/*
|--------------------------------------------------------------------------
| This function Returns Random Country for Footer
|--------------------------------------------------------------------------
*/

        public function get_randomy($limit = 1){
            $this->db->select('tbl_gallery_images.*');
            $this->db->from($this->table_name);
            $this->db->where(TBL_GALLERY_IMAGES.'.is_active', 'Y');
            $this->db->where(TBL_GALLERY.'.is_delete', 1);
            $this->db->join(TBL_GALLERY, TBL_GALLERY.".id = ".TBL_GALLERY_IMAGES.".parent_id", "INNER");
            $this->db->order_by(TBL_GALLERY_IMAGES.'.id', 'RANDOM');
            $this->db->limit($limit, 0);
            $query = $this->db->get();
            return $query->result();
        }

}//class