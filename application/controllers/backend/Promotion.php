<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Promotion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_promotion');
    }

    public function index() {
        $data = array(
            'list_promotion' => $this->m_promotion->list_promotion()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'โปรโมชั่น',
            'small' => 'จัดการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-bullhorn',
                'text' => 'โปรโมชั่น',
                'link' => 'backend/promotion'
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
        $this->m_template->set_Content('backend/admin/promotion', $data);
        $this->m_template->showAdmin();
    }

}
