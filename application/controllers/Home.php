<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $config['base_url'] = site_url('home/index');
        $config['total_rows'] = $this->db->count_all('konten');
        $config['per_page'] = 2;
        $config['uri_segment'] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config['num_links'] = floor($choice);

        //styling
        $config['full_tag_open'] = '<nav> <ul class="pagination d-flex justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = ' <li class="page-item" aria-current="page"><p class="page-link">';
        $config['cur_tag_close'] = '</p></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array('class' => 'text-dark page-link');


        $this->pagination->initialize($config);
        $data['page'] = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('galeri')->limit(3);
        $galeri = $this->db->get()->result_array();

        $konten = $this->CmsModel->get_konten($config["per_page"],$data['page']);
        
        

        $this->db->from('konten')->limit(5);
        $this->db->order_by('id_konten','DESC');
        $recent = $this->db->get()->result_array();

        $data = [
            'caraousel' => $caraousel,
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'galeri' => $galeri,
            'konten' => $konten,
            'recent' => $recent,
            'pagination' => $this->pagination->create_links()
        ];
        $this->load->view('beranda',$data);
    }

    public function artikel($id){

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        // $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->row_array();

        $this->db->from('konten')->limit(5);
        $this->db->order_by('id_konten','DESC');
        $recent = $this->db->get()->result_array();

        $data = [
            'judul' => "Del's|$id",
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'konten' => $konten,
            'recent' => $recent
        ];
        $this->load->view('detail',$data);
    }

    public function kategori($id){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('galeri')->limit(3);
        $galeri = $this->db->get()->result_array();

        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $this->db->order_by('id_kategori','random');
        $judulkategori = $this->db->get()->row_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        // $this->db->join('user c','a.username=c.username','left');
        $this->db->where('b.id_kategori',$id);
        $konten = $this->db->get()->result_array();

        $this->db->from('konten')->limit(5);
        $this->db->order_by('id_konten','DESC');
        $recent = $this->db->get()->result_array();

        $data = [
            'judulkategori' => $judulkategori,
            'caraousel' => $caraousel,
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'galeri' => $galeri,
            'konten' => $konten,
            'recent' => $recent
        ];
        $this->load->view('kategori',$data);
    }

    public function galeri(){
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $this->db->from('konten')->limit(5);
        $this->db->order_by('id_konten','DESC');
        $recent = $this->db->get()->result_array();

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row_array();

        $data = [
            'kategori' => $kategori,
            'judul' => "Del's|Galeri",
            'galeri' => $galeri,
            'recent' => $recent,
            'konfigurasi' => $konfigurasi
        ];
        $this->load->view('galeri',$data);
    }

    public function kontak(){
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten')->limit(5);
        $this->db->order_by('id_konten','DESC');
        $recent = $this->db->get()->result_array();

        $data = [
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'judul' => "Del's|Kontak",
            'recent' => $recent
        ];
        $this->load->view('kontak',$data);
    }

    public function simpansaran(){
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $pesan = $this->input->post('message');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'isi_saran' => $pesan,
            'tanggal' => date('Y-m-d')
        ];
        $this->db->insert('saran',$data);
        $this->session->set_flashdata('alert','<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </svg>

        <div>
           Saran dan Pesan Terkirim
        </div>
      </div>');
        redirect('home/kontak');
    }

    public function search(){

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('galeri')->limit(3);
        $galeri = $this->db->get()->result_array();

        $this->db->from('konten')->limit(5);
        $this->db->order_by('id_konten','DESC');
        $recent = $this->db->get()->result_array();


        $konten = $this->CmsModel->get_keyword($this->input->post('keyword'));

        $data = [
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'galeri' => $galeri,
            'konten' => $konten,
            'recent' => $recent
            
        ];

        $this->load->view('search',$data);

    }

}