<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_customer');
    }

    public function index() {
        // Default redirect by role
        $sess = $this->session->userdata();
        if (isset($sess['User_role']) && $sess['User_role'] == 'admin') {
            redirect('backend/customer/list_customer');
        } elseif (isset($sess['User_role']) && $sess['User_role'] == 'customer') {
            $this->info();
        } else {
            redirect('backend/login');
        }
    }

    public function info() {
        $data = array(
            'list_customer' => $this->m_customer->list_customer()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'ข้อมูลพื้นฐาน',
            'small' => 'ลูกค้า'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-users',
                'text' => 'ลูกค้า',
                'link' => 'backend/customer'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'ข้อมูลพื้นฐาน',
                'link' => ''
            ),
        );
        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($data);
        $this->m_template->set_Content('backend/admin/list_customer', $data);
        $this->m_template->showCustomer();
    }

    public function list_customer() {
        $data = array(
            'list_customer' => $this->m_customer->list_customer()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'ข้อมูลพื้นฐาน',
            'small' => 'ลูกค้า'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-users',
                'text' => 'ลูกค้า',
                'link' => 'backend/customer'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'ข้อมูลพื้นฐาน',
                'link' => ''
            ),
        );
        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($data);
        $this->m_template->set_Content('backend/admin/list_customer', $data);
        $this->m_template->showAdmin();
    }

    public function list_car() {
        $data = array(
            'list_customer' => $this->m_customer->list_customer(),
            'list_car' => $this->m_customer->list_car(),
        );

        $data_nav['pagetitle'] = array(
            'big' => 'ข้อมูลรถ',
            'small' => 'ลูกค้า'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-users',
                'text' => 'ลูกค้า',
                'link' => 'backend/customer'
            ),
            '1' => array(
                'icon' => '',
                'text' => 'ข้อมูลรถ',
                'link' => ''
            ),
        );
        //$this->m_template->set_Title('ทดสอบ');
        $this->m_template->set_Breadcrumb($data_nav);
        //$this->m_template->set_Debug($sess);
        $this->m_template->set_Content('backend/admin/list_car', $data);
        $this->m_template->showAdmin();
    }

}
