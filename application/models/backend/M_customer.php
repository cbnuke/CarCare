<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_customer extends CI_Model {

    function list_customer() {
        $ans = $this->db->get('Customer')->result_array();
        //Check picture if null use default
        foreach ($ans as &$row) {
            if (empty($row['Customer_Picture'])) {
                $row['Customer_Picture'] = 'default.png';
            }
        }
        return $ans;
    }

    function list_car() {
        $this->db->join('Customer', 'Customer.Customer_Username = Car.Customer_Username');
        $ans = $this->db->get('Car')->result_array();
        //Check picture if null use default
        foreach ($ans as &$row) {
            if (empty($row['Customer_Picture'])) {
                $row['Customer_Picture'] = 'default.png';
            }
        }
        return $ans;
    }

}
