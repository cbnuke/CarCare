<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
//        $this->load->model('m_home');
        $this->load->library('form_validation');
    }

    public function index() {
        $sess = $this->session->userdata();
        if (isset($sess['User_role']) && $sess['User_role'] == 'admin') {
            $this->admin();
        } elseif (isset($sess['User_role']) && $sess['User_role'] == 'customer') {
            $this->customer();
        } else {
            redirect('backend/login');
        }
    }

    private function customer() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'หน้าหลัก',
            'small' => 'ลูกค้า'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-home fa-fw',
                'text' => 'หน้าหลัก',
                'link' => 'backend/home'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'ลูกค้า',
                'link' => ''
            ),
        );
        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($sess);
        $this->m_template->set_Content('backend/admin/home', $data);
        $this->m_template->showCustomer();
    }

    private function admin() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'หน้าหลัก',
            'small' => 'เจ้าหน้าที่'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-home fa-fw',
                'text' => 'หน้าหลัก',
                'link' => 'backend/home'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'เจ้าหน้าที่',
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
