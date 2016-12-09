<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_entertainer extends MY_Model
{

    protected $table_name = TBL_ENTERTAINER;
    protected $_lang_tbl = TBL_ENTERTAINER_LANGUAGE;
    protected $table_images = TBL_ENTERTAINER_IMAGES;

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
            'entertainer_id' => $id,
            'language_id' => $languageId
        );

        return $this->db->insert($this->_lang_tbl, $save_lang);
    }

    public function getLanguageById($id)
    {
        $this->db->select(TBL_LANGUAGE . '.name_en,' . TBL_LANGUAGE . '.id')->from($this->_lang_tbl)->where(array(
            'entertainer_id' => $id
        ));

        $this->db->join(TBL_LANGUAGE, TBL_LANGUAGE . '.id = ' . $this->_lang_tbl . '.language_id', 'INNER');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    public function removeLangById($id)
    {
        $this->db->where('entertainer_id', $id);
        return $this->db->delete($this->_lang_tbl);
    }

    public function getPicsByPk($id)
    {
        $this->db->select('id,image')->from($this->table_images)->where("entertainer_fk = $id")->order_by('id', 'ASC');
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
            'entertainer_fk' => $stylistId
        );

        $this->db->where($where);
        return $this->db->delete($this->table_images);
    }

    public function updatePics($save)
    {
        return $this->db->insert($this->table_images, $save);
    }

}
