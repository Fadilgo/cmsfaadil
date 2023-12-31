<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('level')){
          redirect('auth');
        }
      }
  
      public function index(){
        $user = $this->db->get_where('user',['id_user'=>$this->session->userdata('id_user')])->row_array();


        $data = [
            'judul_halaman' => 'password settings',
            'user' => $user
        ];

          $this->load->view('admin/password',$data);
      }

      public function update(){
        $user = $this->db->get_where('user',['id_user'=>$this->session->userdata('id_user')])->row_array();

        $password0  = md5($this->input->post('password0'));
        $password1  = md5($this->input->post('password1'));
        $password2  = md5($this->input->post('password2'));

        // $this->db->from('user')->where('password',$password0);
        // $cek = $this->db->get()->row_array();
        if($password0 != $user['password']){
            $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            <div>
              Password lama salah
            </div>
          </div>');
          redirect('admin/password');
        }else if($password0 == $password1){
                $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  Password baru harus berbeda dari password lama
                </div>
              </div>');
              redirect('admin/password');
            }else if($password1 != $password2){
                $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  Password baru tidak cocok 
                </div>
              </div>');
              redirect('admin/password');
            }else{
                $this->db->set('password',$password1);
                $this->db->where('id_user',$this->session->userdata('id_user'));
                $this->db->update('user');
                $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                  Password berhasi diganti
                </div>
              </div>');
              redirect('admin/password');

            }
        }

      }

     

