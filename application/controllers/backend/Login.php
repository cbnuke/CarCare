<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    private $mFailLimit = 10;
    private $mResetTime = 300; //seconds

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->model('backend/m_login');

        //Count Login fail
        if ($this->session->tempdata('login_fail') == NULL) {
            $this->session->set_tempdata('login_fail', '0', $this->mResetTime);
        }
    }

    public function index() {
        $tempF = $this->session->tempdata('login_fail');
        if ($tempF > $this->mFailLimit) {
            show_404();
        }

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            if ($this->m_login->set_validation()) {
                $temp = $this->m_login->get_post();
                if ($this->m_login->loginProcess($temp)) {
                    $this->session->unset_tempdata('login_fail');
                    redirect('backend/home');
                } else {
                    $data['login_fail'] = TRUE;
                    $this->session->unset_tempdata('login_fail');
                    $this->session->set_tempdata('login_fail', $tempF + 1, $this->mResetTime);
                }
            } else {
                $data['login_request'] = TRUE;
            }
        }
        $data['form_action'] = form_open('backend/login', array('class' => 'form-signin'));
        $data['form_input'] = $this->m_login->set_form();

        $this->load->view('backend/login', $data);
    }

}
