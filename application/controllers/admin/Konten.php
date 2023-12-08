<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {

    public function __construct(){
      parent::__construct();
      if(!$this->session->userdata('level')){
        redirect('auth');
      }
    }

    public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $Kategori = $this->db->get()->result_array();

        // $this->db->select('a.*,c.nama,b.nama_kategori');

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        // $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = [
            'judul_halaman' => 'Konten',
            'kategori' => $Kategori,
            'konten' => $konten
        ];
        $this->load->view('admin/konten',$data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path'] = 'template/upload/konten/'; 
        $config['max_size'] = 500*1024;
        $config['allowed_types'] ='*';
        $config['file_name'] = $namafoto;
        $this->load->library('upload',$config);

        $judul_konten = $this->input->post('judul_konten');
        $this->db->from('konten')->where('judul_konten',$judul_konten);
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
          redirect('admin/konten');
        }else if(!$this->upload->do_upload('foto')){
            $error = array('eror' => $this->upload->display_errors());
        }else if($cek <> null){
              $error = array('eror' => $this->upload->display_errors());
                $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  Judul Konten Sudah ada
                </div>
              </div>');
              redirect('admin/konten');
            }else{
                $data = array('upload_data'=>$this->upload->data());
                $data =  [
                    'judul_konten' => $this->input->post('judul_konten'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'isi_konten' => $this->input->post('isi_konten'),
                    'foto' => $namafoto,
                    'slug' => str_replace(' ','-',$this->input->post('judul_konten')),
                    'tanggal' => date('Y-m-d'),
                    'username' => $this->session->userdata('username')
                ];
                $this->db->insert('konten', $data);
                $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  berhasil ditambahkan
                </div>
              </div>');
              redirect('admin/konten');
            }
        }


    public function hapus($id){
      $filename=FCPATH.'/template/upload/konten/'.$id;
      if(file_exists($filename)){
        unlink(FCPATH."/template/upload/konten/".$id);
      }
         $this->db->where('foto', $id);
         $this->db->delete('konten');
         $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
         <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
         </svg>
         <div>
           Data berhasil dihapus
         </div>
       </div>');
         redirect('admin/konten');
    }

    public function update(){
      $namafoto = $this->input->post('fotoo');
      $config['upload_path'] = 'template/upload/konten/'; 
      $config['max_size'] = 500*1024;
      $config['allowed_types'] ='*';
      $config['file_name'] = $namafoto;
      $config['overwrite'] = true;
      $this->load->library('upload',$config);

      $judul_konten = $this->input->post('judul_konten');
      $this->db->from('konten')->where('judul_konten',$judul_konten);
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
        redirect('admin/konten');
      }else if(!$this->upload->do_upload('foto')){
          $error = array('eror' => $this->upload->display_errors());
      }else{
              $data = array('upload_data'=>$this->upload->data());
              $data =  [
                  'judul_konten' => $this->input->post('judul_konten'),
                  'id_kategori' => $this->input->post('id_kategori'), 
                  'isi_konten' => $this->input->post('isi_konten'),
                  'slug' => str_replace(' ','-',$this->input->post('judul_konten'))
              ];
              $dimana = ['foto' => $namafoto];
              $this->db->update('konten', $data,$dimana);
              $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
              </svg>
              <div>
                berhasil diupdate
              </div>
            </div>');
            redirect('admin/konten');
          }
      }

}
