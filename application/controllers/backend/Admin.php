<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_admin');
    }

    public function index() {
        $data = array(
            'list_admin' => $this->m_admin->list_admin()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'เจ้าหน้าที่',
            'small' => 'จัดการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-user-secret',
                'text' => 'เจ้าหน้าที่',
                'link' => 'backend/customer'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'จัดการ',
                'link' => ''
            ),
        );
        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($data);
        $this->m_template->set_Content('backend/admin/admin', $data);
        $this->m_template->showAdmin();
    }

}
