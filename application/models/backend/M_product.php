<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_product extends CI_Model {

    function list_product() {
        $ans = $this->db->get('Product')->result_array();
        return $ans;
    }

}
