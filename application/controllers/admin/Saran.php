<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('level')){
          redirect('auth');
        }
      }

    public function index(){
        $this->db->from('saran');
        $this->db->order_by('tanggal','ASC');
        $saran = $this->db->get()->result_array();

        $data = [
            'judul_halaman' => 'Pesan Dan Kritik',
            'saran' => $saran
        ];
        $this->load->view('admin/pesan',$data);
    }

    public function hapus($id){
        $this->db->where('id_saran',$id);
        $this->db->delete('saran');

        $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
         <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
         </svg>
         <div>
           Data berhasil dihapus
         </div>
       </div>');

       redirect('admin/saran');
    }

    public function deleteall(){
        $this->db->empty_table('saran');
        $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </svg>
        <div>
         Semua Data berhasil dihapus
        </div>
      </div>');

      redirect('admin/saran');
    }

}