<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{


    public function product_list()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }

    public function product_import()
    {
    }

    public function product_selldetail($sell_id)
    {


        /* INNER JOIN AND SELECT */
        $query = $this->db->query("SELECT * FROM gj_product pd INNER JOIN(SELECT * FROM gj_exportproduct ex 
        WHERE ex.exportproduct_id = $sell_id) as ex ON (pd.product_code = ex.product_code)");

        return $query->result_array();
    }

    public function product_manufacdetail($id)
    {

        echo $id;
        $query = $this->db->query("SELECT * FROM gj_product pd 
        INNER JOIN(SELECT * FROM gj_productbalance pb 
        WHERE pb.productbalance_id = $id) as pb ON (pd.product_code = pb.product_code)

        LEFT JOIN(SELECT * FROM gj_manufac mf
        WHERE mf.manufac_id = $id) as mf ON (pb.manufac_id = mf.manufac_id)

        ");

        return $query->result_array();
    }
    public function product_detail($product_code)
    {
        /* Get Data from Primary Key */
        $fetch = array('product_code' => $product_code);
        $query = $this->db->get_where('gj_product', $fetch);
        return $query->result_array();
    }

    public function product_select($id){
        /* Get Data from Primary Key */
        $fetch = array('product_code' => $id);
        $query = $this->db->get_where('gj_product', $fetch);
        return $query->result_array();
    }

    public function product_importreport()
    {
        /* INNER JOIN */
        $this->db->select('pd.product_code,pd.product_name,im.*');
        $this->db->from('gj_product as pd');
        $this->db->join('gj_importproduct as im', 'pd.product_code = im.product_code');

        $query = $this->db->get();
        $query->result_array();
        /* foreach($query as $a){
            print_r($a);
            echo '<pre>';
        }
        exit(); */
        return $query->result_array();
    }

    public function product_exportreport()
    {
        /* INNER JOIN */
        $this->db->select('pd.product_code,pd.product_name,ex.*');
        $this->db->from('gj_product as pd');
        $this->db->join('gj_exportproduct as ex', 'pd.product_code = ex.product_code');

        $query = $this->db->get();
        return $query->result_array();
    }

    /* 
  public function product_select($product_code){
     
      $fetch = array('product_code' => $product_code);
      $query = $this->db->get_where('gj_product', $fetch);
      return $query->result_array();
  } */

    public function product_productbalance()
    {

        /* LEFT JOIN */
        $this->db->select('*');
        $this->db->from('gj_manufac as mf');
        $this->db->join('gj_product as pd', 'pd.product_code = mf.product_code', 'left');
        $this->db->join('gj_exportproduct as ex', 'ex.product_code = pd.product_code', 'left');
        $this->db->join('gj_productbalance as pb', 'pb.productbalance_id = mf.manufac_id', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }

    /* สินค้าคงคลัง Supplyer */
    public function product_balancesupplyer()
    {
        
        /* LEFT JOIN */
         $this->db->select('*');
        $this->db->from('gj_importproduct as im');
        $this->db->join('gj_product as pd', 'pd.product_code = im.product_code', 'left');
        $this->db->join('gj_exportproduct as ex', 'ex.product_code = pd.product_code', 'left');
        $this->db->join('gj_balancesupplyer as bs', 'bs.balancesupplyer_id = im.importproduct_id', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }
    

    public function product_manufacinsert()
    {
        $query = $this->db->get('gj_manufac');
        return $query->result_array();
    }

    public function product_manufacreport(){
        
        /* INNER JOIN */
        $this->db->select('pd.product_code,pd.product_name,mn.*');
        $this->db->from('gj_product as pd');
        $this->db->join('gj_manufac as mn', 'pd.product_code = mn.product_code');

        $query = $this->db->get();
        $query->result_array();
        
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



    /* UPDATE */
    public function product_update_db()
    {
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
    public function product_sell_update()
    {
        $input = array(
            'exportproduct_id' => $this->input->post('sellid'),
            'exportproduct_price' => $this->input->post('sellprice'),
            'exportproduct_amount' => $this->input->post('sellamount'),
            'exportproduct_sumprice' => $this->input->post('sellsumprice'),
            'exportproduct_vat' => $this->input->post('sellvat'),
            'exportproduct_includevat' => $this->input->post('sellincludevat')

        );

        /*   print_r($input);
        echo '<pre>';
        exit(); */

        $this->db->where('exportproduct_id', $input['exportproduct_id']);
        $this->db->update('gj_exportproduct', $input);
    }





    /* DELETE */
    public function product_delete($product_code)
    {
        $this->db->where('product_code', $product_code);
        $this->db->delete('gj_product');
    }
}
