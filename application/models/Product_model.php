<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Controller
{


    public function product_list()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }
    public function product_detail($product_code)
    {
        $query = $this->db->getwhere('gj_product',array('product_code'=>$product_code));
        /* $query = $this->db->getwhere('gj_product',array('product_code'=>$product_code))->result_array(); */
        return $query->result_array();
    }
  /*   public function product_detail()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    } */
  
    public function product_productbalance()
    {
        $query = $this->db->get('gj_productbalance');
        return $query->result_array();
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




    /* Metarial_model */
    /* INSERT */
    public function metarial_insert_db($input)
    {
        $this->db->insert('gj_metarial', $input);
    }

    public function metarial_list()
    {
        $query = $this->db->get('gj_metarial');
        return $query->result_array();
    }




}
