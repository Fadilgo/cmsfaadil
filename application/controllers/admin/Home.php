<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('level')){
          redirect('auth');
        }
        $this->load->model('CmsModel');
      }

    public function index(){
        $data = [
            'judul_halaman' => 'dashboard'
        ];
        $this->load->view('admin/dashboard',$data);
    }

}