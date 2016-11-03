<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_product');
    }

    public function index() {
        $data = array(
            'list_product' => $this->m_product->list_product()
        );

        $data_nav['pagetitle'] = array(
            'big' => 'สินค้า',
            'small' => 'จัดการ'
        );
        $data_nav['breadcrumb'] = array(
            '0' => array(
                'icon' => 'fa fa-tags',
                'text' => 'สินค้า',
                'link' => 'backend/product'
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
        $this->m_template->set_Content('backend/admin/product', $data);
        $this->m_template->showAdmin();
    }

}
