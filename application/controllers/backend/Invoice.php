<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invoice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
//        $this->load->model('m_home');
    }

    public function index() {
        // Default go to process
        redirect('backend/invoice/process');
    }

    public function create_new() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'ลูกค้าที่เป็นสมาชิก',
            'small' => 'ใช้บริการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-cart-plus',
                'text' => 'ใช้บริการ',
                'link' => 'backend/invoice'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'ลูกค้าที่เป็นสมาชิก',
                'link' => ''
            ),
        );

        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($sess);
        $this->m_template->set_Content('backend/admin/home', $data);
        $this->m_template->showAdmin();
    }

    public function create_customer() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'ลูกค้าที่ไม่เป็นสมาชิก',
            'small' => 'ใช้บริการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-cart-plus',
                'text' => 'ใช้บริการ',
                'link' => 'backend/invoice'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'ลูกค้าที่ไม่เป็นสมาชิก',
                'link' => ''
            ),
        );

        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($sess);
        $this->m_template->set_Content('backend/admin/home', $data);
        $this->m_template->showAdmin();
    }

    public function process() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'รายการกำลังดำเนินการ',
            'small' => 'ใช้บริการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-cart-plus',
                'text' => 'ใช้บริการ',
                'link' => 'backend/invoice'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'รายการกำลังดำเนินการ',
                'link' => ''
            ),
        );

        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($sess);
        $this->m_template->set_Content('backend/admin/home', $data);
        $this->m_template->showAdmin();
    }

    public function complete() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'รายการเสร็จแล้ว',
            'small' => 'ใช้บริการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-cart-plus',
                'text' => 'ใช้บริการ',
                'link' => 'backend/invoice'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'รายการเสร็จแล้ว',
                'link' => ''
            ),
        );

        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($sess);
        $this->m_template->set_Content('backend/admin/home', $data);
        $this->m_template->showAdmin();
    }

}
