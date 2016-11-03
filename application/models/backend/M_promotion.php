<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_promotion extends CI_Model {

    function list_promotion() {
        $ans = $this->db->get('Promotion')->result_array();
        return $ans;
    }

}
