<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index(){
        $data = [
            'judul_halaman' => 'Auth',
        ];
        $this->load->view('admin/login',$data);
        
    }

    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username', $username);
        $user = $this->db->get()->row_array();
        if($user == null){
            $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            <div>
             wrong Username 
            </div>
          </div>');
          redirect('auth');
        }else if($user['password'] == $password){
            $data = [
                'username' => $user['username'],
                'nama' => $user['nama'],
                'level' => $user['level'],
                'id_user' => $user['id_user'],
                'foto' => $user['foto'],
            ];
            
            date_default_timezone_set('Asia/Jakarta');
            $this->db->set('recent_login',date('Y-m-d H:i:s'));
            $this->db->where('id_user',$user['id_user']);
            $this->db->update('user');

            $this->session->set_userdata($data);
            redirect('admin/home');
        }else{
            $this->session->set_flashdata('alert','<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            <div>
             wrong password
            </div>
          </div>');
          redirect('auth');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }

}