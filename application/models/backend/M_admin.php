<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_admin extends CI_Model {

    function list_admin() {
        $ans = $this->db->get('Admin')->result_array();
        //Check picture if null use default
        foreach ($ans as &$row) {
            if (empty($row['Admin_Picture'])) {
                $row['Admin_Picture'] = 'default.png';
            }
        }
        return $ans;
    }

}
