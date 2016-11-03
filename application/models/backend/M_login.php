<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_login extends CI_Model {

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
        return $this->form_validation->run();
    }

    function get_post() {
        $get_page_data = array(
            'user' => $this->security->xss_clean($this->input->post('user')),
            'pass' => $this->security->xss_clean($this->input->post('pass'))
        );
        return $get_page_data;
    }

    function checkCustomer($user, $pass) {
        $this->db->from('Customer');
        $this->db->where('Customer_Username', $user);
        $this->db->where('Customer_Password', md5($pass));
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function checkAdmin($user, $pass) {
        $this->db->from('Admin');
        $this->db->where('Admin_Username', $user);
        $this->db->where('Admin_Password', md5($pass));
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function loginProcess($data) {
        //Intial data
        $session = array(
            'User_Username' => '',
            'User_Firstname' => '',
            'User_Lastname' => '',
            'User_Email' => '',
            'User_Picture' => '',
            'User_role' => ''
        );

        //Check customer and admin
        $temp_user = $this->checkCustomer($data['user'], $data['pass']);
        $temp_admin = $this->checkAdmin($data['user'], $data['pass']);

        if ($temp_user != NULL) {
            $session['User_Username'] = $temp_user['Customer_Username'];
            $session['User_Firstname'] = $temp_user['Customer_Firstname'];
            $session['User_Lastname'] = $temp_user['Customer_Lastname'];
            $session['User_Email'] = $temp_user['Customer_Email'];
            if ($temp_user['Customer_Picture'] == NULL || $temp_user['Customer_Picture'] == "NULL") {
                $session['User_Picture'] = 'default.png';
            } else {
                $session['User_Picture'] = $temp_user['Customer_Picture'];
            }
            $session['User_role'] = 'customer';
            $this->session->set_userdata($session);
            return TRUE;
        } elseif ($temp_admin != NULL) {
            $session['User_Username'] = $temp_admin['Admin_Username'];
            $session['User_Firstname'] = $temp_admin['Admin_Firstname'];
            $session['User_Lastname'] = $temp_admin['Admin_Lastname'];
            $session['User_Email'] = $temp_admin['Admin_Email'];
            if ($temp_user['Admin_Picture'] == NULL || $temp_admin['Admin_Picture'] == "NULL") {
                $session['User_Picture'] = 'default.png';
            } else {
                $session['User_Picture'] = $temp_admin['Admin_Picture'];
            }
            $session['User_role'] = 'admin';
            $this->session->set_userdata($session);
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
