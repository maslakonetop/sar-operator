<?php 

class Dataharian extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_dataharian');
                $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('layout/header');
		$this->load->view('v_tampil',$data);
        $this->load->view('layout/footer');
	}
}