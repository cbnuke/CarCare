<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_service extends CI_Model {

    function list_service() {
        $ans = $this->db->get('Service')->result_array();
        return $ans;
    }

}
