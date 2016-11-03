<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_service');
    }

    public function index() {
        $data = array(
            'list_service' => $this->m_service->list_service()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'บริการ',
            'small' => 'จัดการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-book',
                'text' => 'บริการ',
                'link' => 'backend/service'
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
        $this->m_template->set_Content('backend/admin/service', $data);
        $this->m_template->showAdmin();
    }

}
