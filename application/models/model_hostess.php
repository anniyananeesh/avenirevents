<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_hostess extends MY_Model
{

    protected $table_name = TBL_HOSTESS;
    protected $_lang_tbl = "tbl_hostess_language";
    protected $table_images = TBL_HOSTESS_IMAGES;

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

    public function setLanguage($stylistId, $languageId)
    {
        $save_lang = array(
            'hostess_id' => $stylistId,
            'language_id' => $languageId
        );

        return $this->db->insert($this->_lang_tbl, $save_lang);
    }

    public function getLanguageById($id)
    {
        $this->db->select(TBL_LANGUAGE . '.name_en,' . TBL_LANGUAGE . '.id')->from($this->_lang_tbl)->where(array(
            'hostess_id' => $id
        ));

        $this->db->join(TBL_LANGUAGE, TBL_LANGUAGE . '.id = ' . $this->_lang_tbl . '.language_id', 'INNER');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    public function removeLangById($id)
    {
        $this->db->where('hostess_id', $id);
        return $this->db->delete($this->_lang_tbl);
    }

    public function getPicsByPk($id)
    {
        $this->db->select('id,image')->from($this->table_images)->where("hostess_fk = $id")->order_by('id', 'ASC');
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
            'hostess_fk' => $stylistId
        );

        $this->db->where($where);
        return $this->db->delete($this->table_images);
    }

    public function updatePics($save)
    {
        return $this->db->insert($this->table_images, $save);
    }

}
