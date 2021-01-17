<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model

{

    /* INSERT */
    public function employee_insert_db($input)
    {
        $this->db->insert('gj_employee', $input);
    }
    

}
