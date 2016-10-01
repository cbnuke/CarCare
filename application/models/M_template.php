<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class M_template extends CI_Model {

    private $title = 'ระบบสารสนเทศ ศพฐ.๔';
    private $view_name = NULL;
    private $set_data = NULL;
    private $breadcrumb_data = array();
    private $permission = "ALL";
    private $debud_data = NULL;
    private $lang_value = array('theme');
    private $version = '1.0';

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

    function set_Permission($mode) {
        $this->permission = $mode;
    }

    function check_permission() {
        $sess = $this->session->userdata('login');
        if ($sess == NULL || $sess == FALSE) {
            redirect('login');
        }
        return TRUE;
    }

    function set_Language($in) {
        foreach ($in as $data) {
            array_push($this->lang_value, $data);
        }
    }

    function showTemplate() {
        //Check login
        $this->check_permission();

        //Load version for Cache CSS and JS
        $data['version'] = $this->version;



        $user = $this->session->userdata('user');
//        Old
//        $data['u_name'] = $user['u_name'];
//        $data['form_login'] = form_open('logout', array('class' => 'navbar-form pull-right', 'style' => 'height: 40px;'));

        $data['title'] = $this->title;
//        $data['debug'] = $this->debud_data;
//        $data['breadcrumb'] = $this->breadcrumb_data;
        //Data to view
        $data_view = $this->set_data;
        $data_view += $this->breadcrumb_data;

        //Data to nav
        $data_nav['debug'] = $this->debud_data;
        $data_nav['page'] = $this->uri->segment(1);
        $data_nav['subpage'] = $this->uri->segment(2);

        $data_nav['name'] = $this->session->userdata('name');
        $data_nav['position'] = $this->session->userdata('position');
        $data_nav['per_name'] = $this->session->userdata('per_name');
        $data_nav['per_value'] = $this->session->userdata('per_value');
        $data_nav['picture'] = $this->session->userdata('picture');

        //Load Notifications to nav
        $id_users = $this->session->userdata('id_users');
//        $data_nav['notifications'] = $this->m_api->checkNotificationsByUser($id_users);
        
        //Load Task to nav
        $id_users = $this->session->userdata('id_users');
//        $data_nav['task'] = $this->m_api->checkTaskByUser($id_users);


        //--- Alert System ---//
        $data_nav['alert'] = $this->session->userdata('alert');
        $this->session->unset_userdata('alert');

        $this->load->view('theme_header', $data);
        $this->load->view('theme_nav', $data_nav);
        if ($this->view_name != NULL) {
            $this->load->view($this->view_name, $data_view);
        }
        $this->load->view('theme_footer');
    }

}
