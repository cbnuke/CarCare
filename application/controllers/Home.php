<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
    }

    public function index() {
        $data = array(
//            'list_accept' => $this->m1_home->checkYourAcceptList(),
//            'list_close' => $this->m1_home->checkYourCloseCaseList(),
//            'list_analysis' => $this->m1_home->checkYourAnalysisCaseList(),
//            'list_compare' => $this->m1_home->checkYourCompareCaseList()
        );

        $this->m_template->set_Content('web/home', $data);
        $this->m_template->showWeb();
    }

}

/* End of file C1_home.php */
/* Location: ./application/controllers/C1_home.php */