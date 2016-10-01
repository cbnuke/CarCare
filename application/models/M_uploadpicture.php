<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_uploadpicture extends CI_Model {

    function uploadMarker($f_name) {
        $config['upload_path'] = './assets/img/icon/';
        $config['allowed_types'] = 'gif|jpg|png';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $temp['file_name'];
        }
    }

    function uploadUnknownSTR($f_name, $id_case) {
        $config['upload_path'] = './assets/img/db_unknown/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $id_case;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return 'unknown/' . $temp['file_name'];
        }
    }

    function uploadKnownSTR($f_name, $id_case) {
        $config['upload_path'] = './assets/img/db_known/str/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $id_case;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return 'known/str/' . $temp['file_name'];
        }
    }

    function uploadKnownFront($f_name, $id_case) {
        $config['upload_path'] = './assets/img/db_known/front/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $id_case;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return 'known/front/' . $temp['file_name'];
        }
    }

    function uploadKnownLeft($f_name, $id_case) {
        $config['upload_path'] = './assets/img/db_known/left/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $id_case;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return 'known/left/' . $temp['file_name'];
        }
    }

    function uploadKnownRight($f_name, $id_case) {
        $config['upload_path'] = './assets/img/db_known/right/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $id_case;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return 'known/right/' . $temp['file_name'];
        }
    }

    function uploadCaseKnownDetailFront($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-f';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseKnownDetailLeft($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-l';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseKnownDetailRight($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-r';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseKnownSTR($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'pdf';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-s';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            if ($temp['file_type'] == 'application/pdf' && extension_loaded('imagick')) {
                $this->converterPDFToJPG($temp['file_path'], $temp['file_name'], $temp['raw_name']);
            }
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseUnknownPicture1($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-1';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseUnknownPicture2($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-2';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseUnknownPicture3($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-3';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseUnknownSTR($f_name, $case_jobnum_begin, $detail_num, $detail_point) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'pdf';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-' . $detail_num . '-' . $detail_point . '-s';


        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            if ($temp['file_type'] == 'application/pdf' && extension_loaded('imagick')) {
                $this->converterPDFToJPG($temp['file_path'], $temp['file_name'], $temp['raw_name']);
            }
            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    function uploadCaseDoc($f_name, $case_jobnum_begin) {
        $sub_folder = substr($case_jobnum_begin, 0, 4);
        $sub_folder .= '/' . $case_jobnum_begin;
        //Upload path ./assets/case/0459/045900001
        $config['upload_path'] = './assets/case/' . $sub_folder;
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $case_jobnum_begin . '-i';

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($f_name)) {
            $this->upload->display_errors();
            return '';
        } else {
            $temp = $this->upload->data();
            if ($temp['file_type'] == 'application/pdf' && extension_loaded('imagick')) {
                $this->converterPDFToJPG($temp['file_path'], $temp['file_name'], $temp['raw_name']);
            }

            return $sub_folder . '/' . $temp['file_name'];
        }
    }

    public function converterPDFToJPG($path, $name, $raw_name) {
        if (PHP_OS == "WINNT") {
            $cmd = 'convert -density 300 ' . $path . $name . '[0] ' . $path . $raw_name . '.jpg';
            exec($cmd);
        } else {
            $imagick = new Imagick();
            $imagick->setResolution(300, 300);
            $imagick->readImage($path . $name . '[0]');
            $imagick->writeImage($path . $raw_name . '.jpg');
            $imagick->clear();
            $imagick->destroy();
        }
    }

}
