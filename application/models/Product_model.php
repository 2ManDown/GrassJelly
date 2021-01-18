<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{


    public function product_list()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }

    public function product_detail($product_code)
    {

        /* Get Data from Primary Key */
        $fetch = array('product_code' => $product_code);
        $query = $this->db->get_where('gj_product', $fetch);
        return $query->result_array();
    }

  
    public function product_productbalance()
    {

       /*  $this->db->select('*');
        $this->db->from('gj_manufac');
        $this->db->join('gj_product', 'product_code = balanceid');
        $query = $this->db->get(); */
        
        
        $query = $this->db->get('gj_productbalance');
        return $query->result_array();
    }

    public function product_manufacdetail(){
       /*  $fetch = array('product_code' => $product_code);
        $query = $this->db->get_where('gj_product', $fetch);
        return $query->result_array(); */
    }

    public function product_productbalanceselect($product_id)
    {
        $query = $this->db->getwhere('gj_productbalance',array('id'=>$product_id));
        return $query->result_array();
    }

    public function product_manufacinsert()
    {
        $query = $this->db->get('gj_manufac');
        return $query->result_array();
    }


    /* INSERT */
    public function product_insert_db($input)
    {
        $this->db->insert('gj_product', $input);
    }

    public function product_insert_manufac($input)
    {
        $this->db->insert('gj_product', $input);
    }

    public function product_update_db(){
        $input = array(
			'product_code' => $this->input->post('product_code'),
			'product_name' => $this->input->post('product_name'),
			'product_detail' => $this->input->post('product_detail'),
			'product_volume' => $this->input->post('product_volume'),
			'product_price' => $this->input->post('product_price'),
			'product_unit' => $this->input->post('product_unit'),
			'product_img' => $this->input->post('product_img'),
        );
        
        $this->db->where('product_code', $input['product_code']);
        $this->db->update('gj_product', $input);
    }


}
