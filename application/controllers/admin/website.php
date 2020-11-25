<?php

class Website extends CI_Controller
{
    function __construct(){
        parent::__construct();
        adm_logged_in();
        cekadm();
    }

    function index(){
        $data['admin'] = $this->db->get_where('admin', [
            'EMAIL_ADM' =>
            $this->session->userdata('email')
        ])->row_array();
        $data['tittle'] = "Data Website";
		// $data['data'] = $this->navbar_model->get_navbar();
        $this->load->view("admin/template_adm/v_header", $data);
        $this->load->view("admin/template_adm/v_navbar", $data);
        $this->load->view("admin/template_adm/v_sidebar", $data);
        $this->load->view("admin/setting/v_website", $data);
        $this->load->view("admin/template_adm/v_footer");  
    }
}