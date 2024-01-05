<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->m_security->getsecurity();
        $data['content'] = 'v_home';
        $data['title']   = 'Dashboard';

        $this->load->model('m_dashboard');
        $data['anggota']      = $this->m_dashboard->countAnggota();
        $data['buku']         = $this->m_dashboard->countBuku();
        $data['peminjaman']   = $this->m_dashboard->countPinjam();
        $data['pengembalian']   = $this->m_dashboard->countKembali();
        $this->load->view('v_dashboard', $data);
    }
}
