<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller{

  public function __construct(){
    parent:: __construct();
    $this->load->model('m_peminjaman');
  }


  public function index(){
    $data['content'] = 'peminjaman/peminjaman';
    $data['title'] = 'Data Peminjaman';
    $data['peminjaman'] = $this->m_peminjaman->get_data_peminjaman()->result();

    $this->load->view('v_dashboard', $data);
  }

  public function tambahPeminjaman(){
    $data['content'] = 'peminjaman/tambah_peminjaman';
    $data['title']   = 'Form Tambah Peminjaman';
    $data['id_pm'] = $this->m_peminjaman->id_pm();
    $data['peminjam'] = $this->db->get('anggota')->result();
    $data['buku'] = $this->db->get('buku')->result();

    $this->load->view('v_dashboard', $data);
  }

  public function simpan(){
    $data = array(
      'id_pm'       => $this->input->post('id_pm'),
      'id_anggota'  => $this->input->post('id_anggota'),
      'id_buku'     => $this->input->post('id_buku'),
      'tgl_pinjam'  => $this->input->post('tgl_pinjam'),
      'tgl_kembali' => $this->input->post('tgl_kembali'),
    );

    $query = $this->db->insert('peminjaman', $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data berhasil ditambahkan');
      redirect('peminjaman');
    }
  }

  public function kembalikan($id){
    $data = $this->m_peminjaman->get_data_by_id($id);
    $kembalikan = array(
      'id_anggota'       => $data['id_anggota'],
      'id_buku'          => $data['id_buku'],
      'tgl_pinjam'       => $data['tgl_pinjam'],
      'tgl_kembali'      => $data['tgl_kembali'],
      'tgl_pengembalian' => date('Y-m-d'),
    );

    $query = $this->db->insert('pengembalian', $kembalikan);

    if($query = true){
      $delete = $this->m_peminjaman->delete($id);
      if($delete = true){
        $this->session->set_flashdata('info', 'Buku berhasil dikembalikan');
        redirect('peminjaman');
      }
    }
  }



}
