<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_buku');
  }

  public function index()
  {
    $data['content'] = 'buku/buku';
    $data['title']   = 'Daftar Data Buku';
    $data['buku'] = $this->db->get('buku')->result();

    $this->load->view('v_dashboard', $data);
  }

  public function tambahBuku()
  {
    $data['content'] = 'buku/tambah_buku';
    $data['title'] = 'Form Tambah Buku';
    $data['id_buku'] = $this->m_buku->id_buku();

    $this->load->view('v_dashboard', $data);
  }

  public function simpan()
  {
    $data = array(
      'id_buku'      => $this->input->post('id_buku'),
      'judul_buku'   => $this->input->post('judul_buku'),
      'pengarang' => $this->input->post('pengarang'),
      'penerbit'  => $this->input->post('penerbit'),
      'tahun_terbit' => $this->input->post('tahun_terbit'),
      'jumlah'       => $this->input->post('jumlah'),
    );
    $query = $this->db->insert('buku', $data);

    if ($query = true) {
      $this->session->set_flashdata('info', 'Data berhasil disimpan');
      redirect('buku');
    }
  }

  public function edit($id)
  {
    $data['content'] = 'buku/edit_buku';
    $data['title'] = 'Form Edit Buku';
    $data['buku'] = $this->m_buku->edit($id);;

    $this->load->view('v_dashboard', $data);
  }

  public function update()
  {
    $id_buku = $this->input->post('id_buku');
    $data = array(
      'id_buku'      => $this->input->post('id_buku'),
      'pengarang' => $this->input->post('pengarang'),
      'penerbit'  => $this->input->post('penerbit'),
      'judul_buku'   => $this->input->post('judul_buku'),
      'tahun_terbit' => $this->input->post('tahun_terbit'),
      'jumlah'       => $this->input->post('jumlah'),
    );

    $query = $this->m_buku->update($id_buku, $data);
    if ($query = true) {
      $this->session->set_flashdata('info', 'Data berhasil di-update');
      redirect('buku');
    }
  }

  public function delete($id)
  {
    $query = $this->m_buku->delete($id);

    if ($query = true) {
      $this->session->set_flashdata('info', 'Data berhasil dihapus');
      redirect('buku');
    }
  }
}
