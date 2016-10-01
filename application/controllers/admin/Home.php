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
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $data_nav['pagetitle'] = array(
            'big' => '',
            'small' => ''
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-home fa-fw',
                'text' => 'หน้าหลัก',
                'link' => 'C1_home'
            )
        );
        $id_users = $this->session->userdata('id_users');

//        $this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
//        $this->m_template->set_Debug($data['list_accept']);
//        $this->m_template->set_Debug($data['list_analysis']);
//        $this->m_template->set_Debug($this->session->userdata());
        $this->m_template->set_Content('admin/home/main', $data);
        $this->m_template->showAdmin();
    }

}

/* End of file C1_home.php */
/* Location: ./application/controllers/C1_home.php */