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

    public function mobile_stock_history()
    {
        $this->db->order_by('gj_sale_stock.sale_stock_date', 'desc');
        $this->db->order_by('gj_sale_stock.sale_stock_id', 'desc');
        $this->db->join('gj_product', 'gj_product.product_code = gj_sale_stock.product_code');
        $this->db->join('gj_stock_status', 'gj_stock_status.stock_status_id = gj_sale_stock.sale_stock_status');
        $this->db->join('gj_product_category', 'gj_product_category.product_category_id = gj_sale_stock.sale_stock_category');

        $this->db->where('employee_id', $this->session->userdata('employee'));
        $query = $this->db->get('gj_sale_stock');
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
        $this->db->insert('gj_sale_stock', $value);
    }

    public function mobile_return_insert($value){
        $this->db->insert('gj_product_stock', $value);
    }



}
