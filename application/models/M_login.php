<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_login extends CI_Model {

    function updateLastLogin($id_users) {
        $format = 'DATE_W3C';
        $time = time();
        $datetime = standard_date($format, $time);
        $this->db->where('id_users', $id_users);
        $this->db->update('users', array('last_login' => $datetime));
    }

    function set_form() {
        $i_user = array(
            'name' => 'user',
            'value' => set_value('user'),
            'placeholder' => 'Username',
            'autofocus' => true,
            'class' => 'form-control');
        $i_pass = array(
            'name' => 'pass',
            'value' => set_value('pass'),
            'placeholder' => 'Password',
            'class' => 'form-control');

        $data = array(
            'user' => form_input($i_user),
            'pass' => form_password($i_pass)
        );
        return $data;
    }

    function set_validation() {
        $this->form_validation->set_rules('user', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');
        return TRUE;
    }

    function get_post() {
        $get_page_data = array(
            'user' => $this->security->xss_clean($this->input->post('user')),
            'pass' => $this->security->xss_clean($this->input->post('pass'))
        );
        return $get_page_data;
    }

    function check_user($user, $pass) {
        $this->db->from('users');
        $this->db->join('permission', 'permission.id_permission=users.id_permission');
        $this->db->where('id_users', $user);
        $this->db->where('pass', md5($pass));
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result_array()[0];
            ;
        } else {
            return FALSE;
        }
    }

    function login($data) {
        //Intial data
        $session = array(
            'id_users' => 'admin',
            'OfficialID' => '',
            'name' => 'Admin',
            'position' => 'administrator',
            'per_name' => 'ผู้ดูแลระบบ',
            'per_value' => 'all',
            'picture' => 'avatar5.png',
            'login' => FALSE
        );

        $session['login'] = TRUE;
        $this->session->set_userdata($session);
        return TRUE;

        $temp_user = $this->check_user($data['user'], $data['pass']);

        if ($temp_user != FALSE) {
            $session['id_users'] = $data['user'];
            $session['name'] = $temp_user['title'] . $temp_user['name'] . ' ' . $temp_user['surname'];
            $session['position'] = $temp_user['position'];
            $session['per_name'] = $temp_user['per_name'];
            $session['per_value'] = $temp_user['per_value'];
            if ($temp_user['picture'] == NULL || $temp_user['picture'] == "NULL") {
                $img = 'avatar5.png';
            } else {
                $img = $temp_user['picture'];
            }

            //Check OfficialID from official
            $query = $this->db->get_where('official', array('id_users' => $data['user']));
            if ($query->num_rows() > 0) {
                $temp = $query->first_row('array');
                $session['OfficialID'] = $temp['OfficialID'];
            }


            $session['picture'] = $img;
            $session['login'] = TRUE;
            $this->session->set_userdata($session);

            //Update last login
            $this->updateLastLogin($data['user']);

            //loginLog
            $this->m_systemlog->loginLog();

            return TRUE;
        } else {
            return FALSE;
        }
    }

}
