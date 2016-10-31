<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class M_template extends CI_Model {

    private $title = 'ร้านบ้านคาร์แคร์ Ban Car Care';
    private $view_name = NULL;
    private $set_data = NULL;
    private $breadcrumb_data = array();
    private $debud_data = NULL;

    function set_Debug($data) {
        $this->debud_data = $data;
    }

    function set_Title($name) {
        $this->title = $name . ' | ' . $this->title;
    }

    function set_Content($name, $data) {
        $this->view_name = $name;
        $this->set_data = $data;
    }

    function set_Breadcrumb($data) {
        $this->breadcrumb_data = $data;
    }

    function check_permission($type = 'customer') {
        $role = $this->session->userdata('User_role');
        if ($role == $type) {
            return TRUE;
        } else {
            redirect('backend/login');
        }
    }

    function showWeb() {
        if ($this->view_name != NULL) {
            $this->load->view($this->view_name, $this->set_data);
        }
    }

    function showCustomer() {
        //Check login
        $this->check_permission('customer');

        //Data to head
        $data['title'] = $this->title;

        //Data to view
        $data_view = $this->set_data;
        $data_view += $this->breadcrumb_data;

        //Data to nav
        $data_nav['debug'] = $this->debud_data;
        $data_nav['page'] = (empty($this->uri->segment(2))) ? 'home' : $this->uri->segment(2);
        $data_nav['subpage'] = $this->uri->segment(3);

        $session = $this->session->userdata();
        $data_nav['name'] = $session['User_Firstname'] . ' ' . $session['User_Lastname'];
        $data_nav['email'] = $session['User_Email'];
        $data_nav['role'] = $session['User_role'];
        $data_nav['picture'] = $this->session->userdata('User_Picture');
        $data_nav['breadcrumb'] = $this->breadcrumb_data;

        //--- Alert System ---//
        $data_nav['alert'] = $this->session->userdata('alert');
        $this->session->unset_userdata('alert');

        $this->load->view('backend/theme_header', $data);
        $this->load->view('backend/theme_nav_customer', $data_nav);
        if ($this->view_name != NULL) {
            $this->load->view($this->view_name, $data_view);
        }
        $this->load->view('backend/theme_footer');
    }

    function showAdmin() {
        //Check login
        $this->check_permission('admin');

        //Data to head
        $data['title'] = $this->title;

        //Data to view
        $data_view = $this->set_data;
        $data_view += $this->breadcrumb_data;

        //Data to nav
        $data_nav['debug'] = $this->debud_data;
        $data_nav['page'] = (empty($this->uri->segment(2))) ? 'home' : $this->uri->segment(2);
        $data_nav['subpage'] = $this->uri->segment(3);

        $session = $this->session->userdata();
        $data_nav['name'] = $session['User_Firstname'] . ' ' . $session['User_Lastname'];
        $data_nav['email'] = $session['User_Email'];
        $data_nav['role'] = $session['User_role'];
        $data_nav['picture'] = $this->session->userdata('User_Picture');
        $data_nav['breadcrumb'] = $this->breadcrumb_data;

        //--- Alert System ---//
        $data_nav['alert'] = $this->session->userdata('alert');
        $this->session->unset_userdata('alert');

        $this->load->view('backend/theme_header', $data);
        $this->load->view('backend/theme_nav_admin', $data_nav);
        if ($this->view_name != NULL) {
            $this->load->view($this->view_name, $data_view);
        }
        $this->load->view('backend/theme_footer');
    }

}
