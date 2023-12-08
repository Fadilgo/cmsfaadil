<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {

    public function __construct(){
      parent::__construct();
      if(!$this->session->userdata('level')){
        redirect('auth');
      }
    }

    public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $data = [
            'judul_halaman' => 'caraousel',
            'caraousel' => $caraousel
        ];
        $this->load->view('admin/caraousel',$data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path'] = 'template/upload/caraousel/'; 
        $config['max_size'] = 500*1024;
        $config['allowed_types'] ='*';
        $config['file_name'] = $namafoto;
        $this->load->library('upload',$config);

        $judul = $this->input->post('judul');
        $this->db->from('caraousel')->where('judul',$judul);
        $cek = $this->db->get()->result_array();
        if($_FILES['foto']['size']>= 500*1024){
            $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            <div>
              Ukuran Foto terlalu besar
            </div>
          </div>');
          redirect('admin/caraousel');
        }else if(!$this->upload->do_upload('foto')){
            $error = array('eror' => $this->upload->display_errors());
        }else if($cek <> null){
              $error = array('eror' => $this->upload->display_errors());
                $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  Judul caraousel Sudah ada
                </div>
              </div>');
              redirect('admin/caraousel');
            }else{
                $data = array('upload_data'=>$this->upload->data());
                $data =  [
                    'judul' => $this->input->post('judul'),
                    'foto' => $namafoto
                ];
                $this->db->insert('caraousel', $data);
                $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  berhasil ditambahkan
                </div>
              </div>');
              redirect('admin/caraousel');
            }
        }


    public function hapus($id){
      $filename = FCPATH."template/upload/caraousel/".$id;
      if(file_exists($filename)){
        unlink(FCPATH."/template/upload/caraousel/".$id);
      }
         $this->db->where('foto', $id);
         $this->db->delete('caraousel');
         $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
         <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
         </svg>
         <div>
           gambar caraousel berhasil dihapus
         </div>
       </div>');
         redirect('admin/caraousel');
    }
}
