<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobile_model extends CI_Model
{
    public function mobile_stockbalance()
    {

        $this->db->order_by('product_code');
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }

    public function mobile_orderinsert($input)
    {
        $this->db->insert('gj_order_sale', $input);
    }

    public function mobile_orderdetail_insert($value)
    {
        $this->db->insert('gj_order_detailsale', $value);
    }

    public function mobile_stock_insert($value){
        /* echo '<pre>';
        print_r($value);
        exit(); */
        $this->db->insert('gj_sale_stock', $value);
    }



}
