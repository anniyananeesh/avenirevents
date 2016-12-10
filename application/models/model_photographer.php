<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_photographer extends MY_Model
{

    protected $table_name = TBL_PHOTOGRAPHER;
    protected $_lang_tbl = "tbl_photographer_language";
    protected $table_images = TBL_PHOTOGRAPHER_IMAGES;

    public function hasUsername($where)
    {
        $user = $this->get_detail($where);
        return ($user) ? TRUE : FALSE;
    }

    public function genUniqCode()
    {
        $this->db->select('code')->from($this->table_name)->limit(1);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            $result = $query->result();
            return ++$result[0]->code;

        } else {
            return '4110001';
        }
    }

    public function setLanguage($id, $languageId)
    {
        $save_lang = array(
            'photographer_id' => $id,
            'language_id' => $languageId
        );

        return $this->db->insert($this->_lang_tbl, $save_lang);
    }

    public function getLanguageById($id)
    {
        $this->db->select(TBL_LANGUAGE . '.name_en,' . TBL_LANGUAGE . '.id')->from($this->_lang_tbl)->where(array(
            'photographer_id' => $id
        ));

        $this->db->join(TBL_LANGUAGE, TBL_LANGUAGE . '.id = ' . $this->_lang_tbl . '.language_id', 'INNER');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    public function removeLangById($id)
    {
        $this->db->where('photographer_id', $id);
        return $this->db->delete($this->_lang_tbl);
    }

    public function getPicsByPk($id)
    {
        $this->db->select('id,image')->from($this->table_images)->where("photographer_fk = $id")->order_by('id', 'ASC');
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function savePhotos($save)
    {
        return $this->db->insert($this->table_images, $save);
    }

    public function deletePhoto($stylistId, $photo)
    {
        $where = array(
            'image' => $photo,
            'photographer_fk' => $stylistId
        );

        $this->db->where($where);
        return $this->db->delete($this->table_images);
    }

    public function updatePics($save)
    {
        return $this->db->insert($this->table_images, $save);
    }

}
