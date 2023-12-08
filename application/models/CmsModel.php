<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CmsModel extends CI_Model {

    public function jumlah_user(){
        $query = $this->db->get('user');
        if ($query->num_rows() > 0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function get_konten($limit,$start){
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        // $this->db->join('user c','a.username=c.username','left');

        $konten = $this->db->get('',$limit,$start)->result_array();

        return $konten;
    }

    public function get_keyword($keyword){
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        // $this->db->join('user c','a.username=c.username','left');
        $this->db->like('judul_konten',$keyword);
        $this->db->or_like('isi_konten',$keyword);

        $result = $this->db->get()->result_array();

        return $result;
    }

    public function jumlahuser(){
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function jumlahkategori(){
        $query = $this->db->get('kategori');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function jumlahkonten(){
        $query = $this->db->get('konten');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function jumlahcaraousel(){
        $query = $this->db->get('caraousel');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function jumlahgaleri(){
        $query = $this->db->get('galeri');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

    public function jumlahsaran(){
        $query = $this->db->get('saran');
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return 0;
        }
    }

}