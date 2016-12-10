<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_stylist extends MY_Model
{

    protected $table_name = TBL_STYLIST;
    protected $_lang_tbl = "tbl_stylist_language";

    public function hasUsername($where)
    {
        $user = $this->get_detail($where);
        return ($user) ? TRUE : FALSE;
    }

    public function genUniqToken($username)
    {
        $token = time() . rand(10, 5000) . sha1(rand(10, 5000)) . md5(__FILE__);
        $token = str_shuffle($token);
        $token = sha1($token) . md5(microtime()) . md5($username);
        return $token;
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
            'stylist_id' => $stylistId,
            'language_id' => $languageId
        );

        return $this->db->insert($this->_lang_tbl, $save_lang);
    }

    public function getLanguageByModel($stylistId)
    {
        $this->db->select(TBL_LANGUAGE . '.name_en,' . TBL_LANGUAGE . '.id')->from($this->_lang_tbl)->where(array(
            'stylist_id' => $stylistId
        ));

        $this->db->join(TBL_LANGUAGE, TBL_LANGUAGE . '.id = ' . $this->_lang_tbl . '.language_id', 'INNER');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    public function removeLangByModel($stylistId)
    {
        $this->db->where('stylist_id', $stylistId);
        return $this->db->delete($this->_lang_tbl);
    }

    //Company images management
    public function getStylistPicsByPk($id)
    {
        $this->db->select('id,image')->from(TBL_STYLIST_IMAGES)->where("stylist_fk = $id")->order_by('id', 'ASC');
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function savePhotos($save)
    {
        return $this->db->insert(TBL_STYLIST_IMAGES, $save);
    }

    public function deleteCompanyPhoto($stylistId, $photo)
    {
        $where = array(
            'image' => $photo,
            'stylist_fk' => $stylistId
        );

        $this->db->where($where);
        return $this->db->delete(TBL_STYLIST_IMAGES);
    }

    public function updateModelPics($save)
    {
        return $this->db->insert(TBL_STYLIST_IMAGES, $save);
    }

}
