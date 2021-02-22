<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{

    public function product_stock_history()
    {
      $this->db->order_by('gj_product_stock.product_stock_date','desc');
      $this->db->order_by('gj_product_stock.product_stock_time','desc');
      $this->db->join('gj_product','gj_product.product_code = gj_product_stock.product_code');
      $this->db->join('gj_stock_status','gj_stock_status.stock_status_id = gj_product_stock.product_stock_status');
      $this->db->join('gj_product_category','gj_product_category.product_category_id = gj_product_stock.product_stock_category');

      $query = $this->db->get('gj_product_stock');
      return $query->result_array();
    }
    public function product_exportrepot(){
        $this->db->order_by('gj_order.order_date','desc');
        $this->db->order_by('gj_order.order_code','desc');


        $query = $this->db->get('gj_order');
        return $query->result_array();
    }

    public function product_order_detail($order_code)
    {
        $fetch = array('order_code' => $order_code);
        $query = $this->db->get_where('gj_order', $fetch);
        $query->result_array();

        /* INNER JOIN AND SELECT */
        /* $query = $this->db->query("SELECT * FROM gj_product pd INNER JOIN(SELECT * FROM gj_exportproduct ex
        WHERE ex.exportproduct_id = $sell_id) as ex ON (pd.product_code = ex.product_code)"); */

        return $query->result_array();
    }

    public function product_list()
    {
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }

    

    public function product_manufacdetail($id)
    {
        $query = $this->db->query("SELECT * FROM gj_product pd
        INNER JOIN(SELECT * FROM gj_productbalance pb
        WHERE pb.productbalance_id = $id) as pb ON (pd.product_code = pb.product_code)

        LEFT JOIN(SELECT * FROM gj_manufac mf
        WHERE mf.manufac_id = $id) as mf ON (pb.manufac_id = mf.manufac_id)");
        return $query->result_array();
    }

    public function product_detail($product_code)
    {
        /* Get Data from Primary Key */
        $fetch = array('product_code' => $product_code);
        $query = $this->db->get_where('gj_product', $fetch);
        return $query->result_array();
    }

    public function product_select($id)
    {
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
        $this->db->order_by('im.importproduct_id', 'desc');

        $query = $this->db->get();
        $query->result_array();
        /* foreach($query as $a){
            print_r($a);
            echo '<pre>';
        }
        exit(); */
        return $query->result_array();
    }

    /* public function product_exportreport()
    {
      
        $this->db->select('pd.product_code,pd.product_name,ex.*');
        $this->db->from('gj_product as pd');
        $this->db->join('gj_exportproduct as ex', 'pd.product_code = ex.product_code');
        $this->db->order_by('ex.exportproduct_id', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    } */


    public function product_productbalance()
    {

        /* LEFT JOIN */
        $this->db->order_by('product_code','DESC');
        $query = $this->db->get('gj_product');
        return $query->result_array();
    }

    /* สินค้าคงคลัง supplier */
    public function product_balancesupplier()
    {

        /* LEFT JOIN */
        $this->db->select('*');
        $this->db->from('gj_importproduct as im');
        $this->db->join('gj_product as pd', 'pd.product_code = im.product_code', 'left');
        $this->db->join('gj_exportproduct as ex', 'ex.product_code = pd.product_code', 'left');
        $this->db->join('gj_balancesupplier as bs', 'bs.balancesupplier_id = im.importproduct_id', 'left');
        $this->db->order_by('bs.balancesupplier_id', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    }


    public function product_manufacinsert()
    {
        $query = $this->db->get('gj_manufac');
        return $query->result_array();
    }

    public function product_manufacreport()
    {

        /* INNER JOIN */
        $this->db->select('pd.product_code,pd.product_name,mn.*');
        $this->db->from('gj_product as pd');
        $this->db->join('gj_manufac as mn', 'pd.product_code = mn.product_code');
        $this->db->order_by('mn.manufac_id', 'desc');

        $query = $this->db->get();
        $query->result_array();

        return $query->result_array();
    }


    /* INSERT */
    public function product_insert_db($input)
    {
        $this->db->insert('gj_product', $input);
    }

    public function product_insert_manufac()
    {
        $manufac = array(
            //'manufac_id' => $this->input->post(''),
            'product_code' => $this->input->post('product_code'),
            'manufac_produce' => $this->input->post('manufac_produce'),
            'manufac_codelot' => $this->input->post('manufac_codelot'),
            'manufac_producedate' => $this->input->post('manufac_producedate'),
            'manufac_price' => $this->input->post('manufac_price'),
            'manufac_expdate' => $this->input->post('manufac_expdate'),
            'manufac_sumprice' => $this->input->post('manufac_sumprice'),
        );
        $input = array(
            'manufac_codelot' => $this->input->post('manufac_codelot'),
            'product_code' => $this->input->post('product_code'),
            'productbalance_balance' => $this->input->post('manufac_produce'),
        );


        /* echo '<pre>';
        print_r($input);
        print_r($manufac);
        echo '<pre>';
        exit(); */

        $this->db->insert('gj_manufac', $manufac);
        $this->db->insert('gj_productbalance', $input);
    }

    public function product_insert_import(/* $input */)
    {
        $import = array(
            'product_code' => $this->input->post('product_code'),
            'importproduct_amount' => $this->input->post('importproduct_amount'),
            'importproduct_price' => $this->input->post('importproduct_price'),
            'importproduct_imdate' => $this->input->post('importproduct_imdate'),
            'importproduct_sumprice' => $this->input->post('importproduct_sumprice'),
            'importproduct_expdate' => $this->input->post('importproduct_expdate'),

        );


        echo '<pre>';
        print_r($import);
        //print_r($manufac);
        echo '<pre>';
        exit();
        $this->db->insert('gj_importproduct', $import);
        //$this->db->insert('gj_productbalance', $manufac);
    }

    public function product_orderinsert($input)
    {
        $this->db->insert('gj_order', $input);
    }
    public function product_orderdetail_insert($value){
        $this->db->insert('gj_order_detail', $value);
    }
    public function product_stock_insert($value){
        $this->db->insert('gj_product_stock', $value);
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
            'product_min' => $this->input->post('product_min'),
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
