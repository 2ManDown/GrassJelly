<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material_model extends CI_Model

{
    public function material_stock_history()
    {
        $this->db->order_by('gj_material_stock.material_stock_date', 'desc');
        $this->db->order_by('gj_material_stock.material_stock_time', 'desc');
        $this->db->join('gj_material', 'gj_material.material_code = gj_material_stock.material_code');
        $this->db->join('gj_stock_status', 'gj_stock_status.stock_status_id = gj_material_stock.material_stock_status');

        $query = $this->db->get('gj_material_stock');
        return $query->result_array();
    }
    /* INSERT */
    public function material_insert_db($input)
    {
        $this->db->insert('gj_material', $input);
    }

    public function material_materialbalance()
    {
        $this->db->order_by('material_code', 'ASC');
        $query = $this->db->get('gj_material');
        return $query->result_array();
    }

    public function material_supplierlist()
    {
        $this->db->order_by('supplier_id', 'ASC');
        $query = $this->db->get('gj_supplier');
        return $query->result_array();
    }

    public function material_insert_stock($input)
    {
        $this->db->insert('gj_material_stock', $input);
    }

    public function material_reavellist($material_code)
    {
        $query = $this->db->get_where('gj_material', array('material_code' => $material_code));
        return $query->result_array();
    }

    public function material_im()
    {

        /* INNER JOIN */
        $this->db->select('mt.material_code,mt.material_name,im.*');
        $this->db->from('gj_material as mt');
        $this->db->join('gj_immaterial as im', 'mt.material_code = im.material_code');
        $this->db->order_by('im.immaterial_id', 'desc');

        $query = $this->db->get();
        $query->result_array();

        return $query->result_array();
    }

    public function material_reavlist()
    {
        /* INNER JOIN */
        $this->db->select('mt.material_id,mt.material_name,rm.*');
        $this->db->from('gj_material as mt');
        $this->db->join('gj_reavelmaterial as rm', 'mt.material_code = rm.material_code');
        $this->db->order_by('rm.reavelmaterial_id', 'desc');

        $query = $this->db->get();
        $query->result_array();

        return $query->result_array();
    }

    public function material_reavinsert($input)
    {
        $this->db->insert('gj_reavelmaterial', $input);
    }

    /* START IMPROT material */
    public function material_importlist($material_code)
    {
        $query = $this->db->get_where('gj_material', array('material_code' => $material_code));
        return $query->result_array();
    }

    public function material_import($material_code)
    {
        $query = $this->db->get_where('gj_material', array('material_code' => $material_code));
        return $query->result_array();
    }

    public function material_iminsert($input)
    {
        $this->db->insert('gj_immaterial', $input);
    }
    /* END IMPROT material */

    public function material_delete($material_manage)
    {
        $this->db->where('material_code', $material_manage);
        $this->db->delete('gj_material');
    }

    /* ส่งข้อมูลไปหน้าจัดการ */
    public function material_manage($material_manage)
    {
        $query = $this->db->get_where('gj_material', array('material_code' => $material_manage));
        return $query->result_array();
    }

    /* UPDATE of Model*/
    public function material_update_db()
    {

        $input = array(
            'material_id' => $this->input->post('material_id'),
            'material_code' => $this->input->post('material_code'),
            'material_name' => $this->input->post('material_name'),
            'material_volume' => $this->input->post('material_volume'),
            'material_unit' => $this->input->post('material_unit'),

        );
        /* print_r($input);
        exit(); */
        $this->db->where('material_id', $input['material_id']);
        $this->db->update('gj_material', $input);
    }

    public function material_orderinsert($input)
    {
        $this->db->insert('gj_order_material', $input);
    }

    public function material_orderdetail_insert($value){
        $this->db->insert('gj_order_detailmaterial', $value);
    }

    public function material_stock_insert($value){
        $this->db->insert('gj_material_stock', $value);
    }

    public function material_revealreport(){
        $this->db->order_by('gj_order_material.order_material_date','desc');
        $this->db->order_by('gj_order_material.order_material_time','desc');


        $query = $this->db->get('gj_order_material');
        return $query->result_array();
    }

    public function material_order_detail($order_code)
    {
        $fetch = array('order_material_code' => $order_code);
        $query = $this->db->get_where('gj_order_material', $fetch);
        $query->result_array();
        return $query->result_array();
    }



}
