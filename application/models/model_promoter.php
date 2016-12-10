<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_promoter extends MY_Model
{

    protected $table_name = TBL_COMPANY;
    protected $_lang_tbl = TBL_COMPANY_LANGUAGE;

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

    public function setLanguage($companyId, $languageId)
    {
        $save_lang = array(
            'company_id' => $companyId,
            'language_id' => $languageId
        );

        return $this->db->insert($this->_lang_tbl, $save_lang);
    }

    public function getLanguageById($companyId)
    {
        $this->db->select(TBL_LANGUAGE . '.name_en,' . TBL_LANGUAGE . '.id')->from($this->_lang_tbl)->where(array(
            'company_id' => $companyId
        ));

        $this->db->join(TBL_LANGUAGE, TBL_LANGUAGE . '.id = ' . $this->_lang_tbl . '.language_id', 'INNER');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    public function removeLangById($companyId)
    {
        $this->db->where('company_id', $companyId);
        return $this->db->delete($this->_lang_tbl);
    }

    //Company images management
    public function getCompanyPicsByPk($id)
    {
        $this->db->select('id,image')->from(TBL_COMPANY_IMAGES)->where("company_fk = $id")->order_by('id', 'ASC');
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function savePhotos($save)
    {
        return $this->db->insert(TBL_COMPANY_IMAGES, $save);
    }

    public function deleteCompanyPhoto($modelId, $photo)
    {
        $where = array(
            'image' => $photo,
            'company_fk' => $modelId
        );

        $this->db->where($where);
        return $this->db->delete(TBL_COMPANY_IMAGES);
    }

    public function updateCompanyPics($save)
    {
        return $this->db->insert(TBL_COMPANY_IMAGES, $save);
    }

}