<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_system extends CI_Model {

    function list_system() {
        $ans = $this->db->get('System')->result_array();
        return $ans;
    }

}
