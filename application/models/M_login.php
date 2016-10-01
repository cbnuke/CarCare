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
        return TRUE;
    }

    function get_post() {
        $get_page_data = array(
            'user' => $this->security->xss_clean($this->input->post('user')),
            'pass' => $this->security->xss_clean($this->input->post('pass'))
        );
        return $get_page_data;
    }

    function checkCustomer($user, $pass) {
        $this->db->from('User');
        $this->db->where('User_Username', $user);
        $this->db->where('User_Password', md5($pass));
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->first_row('array');
        } else {
            return FALSE;
        }
    }

    function checkAdmin($user, $pass) {
        $this->db->from('UserAdmin');
        $this->db->where('UserAdmin_Username', $user);
        $this->db->where('UserAdmin_Password', md5($pass));
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->first_row('array');
        } else {
            return FALSE;
        }
    }

    function loginCustomer($data) {
        //Intial data
        $session = array(
            'User_ID' => '',
            'User_Username' => '',
            'User_Firstname' => '',
            'User_Lastname' => '',
            'User_Email' => '',
            'User_Picture' => '',
            'Login_customer' => FALSE
        );

        //Check customer
        $temp_user = $this->checkCustomer($data['user'], $data['pass']);

        if ($temp_user != FALSE) {
            $session['User_ID'] = $temp_user['User_ID'];
            $session['User_Username'] = $temp_user['User_Username'];
            $session['User_Firstname'] = $temp_user['User_Firstname'];
            $session['User_Lastname'] = $temp_user['User_Lastname'];
            $session['User_Email'] = $temp_user['User_Email'];
            if ($temp_user['User_Picture'] == NULL || $temp_user['User_Picture'] == "NULL") {
                $session['User_Picture'] = 'avatar5.png';
            }
            $session['Login_customer'] = TRUE;
            $this->session->set_userdata($session);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function loginAdmin($data) {
        //Intial data
        $session = array(
            'UserAdmin_ID' => '',
            'UserAdmin_Username' => '',
            'UserAdmin_Firstname' => '',
            'UserAdmin_Lastname' => '',
            'UserAdmin_Email' => '',
            'UserAdmin_Picture' => '',
            'Login_admin' => FALSE
        );

        //Check admin
        $temp_user = $this->checkAdmin($data['user'], $data['pass']);

        if ($temp_user != FALSE) {
            $session['UserAdmin_ID'] = $temp_user['UserAdmin_ID'];
            $session['UserAdmin_Username'] = $temp_user['UserAdmin_Username'];
            $session['UserAdmin_Firstname'] = $temp_user['UserAdmin_Firstname'];
            $session['UserAdmin_Lastname'] = $temp_user['UserAdmin_Lastname'];
            $session['UserAdmin_Email'] = $temp_user['UserAdmin_Email'];
            if ($temp_user['UserAdmin_Picture'] == NULL || $temp_user['UserAdmin_Picture'] == "NULL") {
                $session['UserAdmin_Picture'] = 'avatar5.png';
            }
            $session['Login_admin'] = TRUE;
            $this->session->set_userdata($session);
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
