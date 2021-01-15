<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Controller
{


    public function product_list()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }
    public function product_detail()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }
    public function product_insert_db($input)
    {
        $this->db->insert('gj_product', $input);
    }

    public function product_productbalance()
    {
        $query = $this->db->get('gj_manufac');
        return $query->result_array();
    }

    public function product_manufacinsert()
    {
        $query = $this->db->get('gj_manufac');
        return $query->result_array();
    }
}
