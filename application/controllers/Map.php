<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
 
class Map extends CI_Controller{
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('map/index');
        $this->load->view('layout/footer');
    }
}