<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model

{

    /* INSERT */
    public function employee_insert_db($input)
    {
        $this->db->insert('gj_employee', $input);
    }

    public function employee_list()
    {
        $query = $this->db->get('gj_employee');
        return $query->result_array();
    }

    public function employee_manage($employee_id)
    {
        $query = $this->db->get_where('gj_employee', array('employee_id' => $employee_id));
        return $query->result_array();
    }

    /* UPDATE */
    public function employee_update_db(){
        $input = array(
            'employee_id' => $this->input->post('employee_id'),
            'employee_name' => $this->input->post('employee_name'),
            'employee_sex' => $this->input->post('employee_sex'),
            'employee_birthdate' => $this->input->post('employee_birthdate'),
            'employee_address' => $this->input->post('employee_address'),
            'employee_tel' => $this->input->post('employee_tel'),
            'employee_email' => $this->input->post('employee_email'),
  
        );
        $this->db->where('employee_id', $input['employee_id']);
        $this->db->update('gj_employee', $input);
    }



    /* DELETE */
    public function employee_delete($employee_id)
    {
        
        $this->db->where('employee_id', $employee_id);
        $this->db->delete('gj_employee');
    }
}
