<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class System extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_system');
    }

    public function index() {
        $data = array(
            'list_system' => $this->m_system->list_system()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'ตั้งค่าข้อมูลร้าน',
            'small' => 'จัดการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-gears',
                'text' => 'ตั้งค่าข้อมูลร้าน',
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
        $this->m_template->set_Content('backend/admin/system', $data);
        $this->m_template->showAdmin();
    }

}
