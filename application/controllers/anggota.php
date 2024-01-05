<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('m_anggota');
  }

  public function index(){
    $data['content'] = 'anggota/v_anggota';
    $data['title'] = 'Daftar Data Anggota';
    $data['anggota'] = $this->db->get('anggota')->result();
    
    $this->load->view('v_dashboard', $data);
  }
  
  public function tambahAnggota(){
    $data['content'] = 'anggota/tambah_anggota';
    $data['title'] = 'Form Tambah Anggota';
    $data['id_anggota'] = $this->m_anggota->id_anggota();

    $this->load->view('v_dashboard', $data);
  }

  public function simpan(){
    $data = array(
      'id_anggota'    => $this->input->post('id_anggota'),
      'nama_anggota'  => $this->input->post('nama_anggota'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'alamat'        => $this->input->post('alamat'),
      'no_telp'       => $this->input->post('no_telepon'),
    );
    $query = $this->db->insert('anggota', $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil disimpan');
      redirect('anggota');
    }
  }

  public function edit($id){
    $data['content'] = 'anggota/edit_anggota';
    $data['title'] = 'Form Edit Anggota';
    $data['anggota'] = $this->m_anggota->edit($id);

    $this->load->view('v_dashboard', $data);
  }

  public function update(){
    $id_anggota = $this->input->post('id_anggota');
    $data = array(
      'id_anggota'    => $this->input->post('id_anggota'),
      'nama_anggota'  => $this->input->post('nama_anggota'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'alamat'        => $this->input->post('alamat'),
      'no_telp'       => $this->input->post('no_telepon'),
    );

    $query = $this->m_anggota->update($id_anggota, $data);
    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil di-update');
      redirect('anggota');
    }
  }

  public function delete($id){
    $query = $this->m_anggota->delete($id);
    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil dihapus');
      redirect('anggota');
    }
  }


}