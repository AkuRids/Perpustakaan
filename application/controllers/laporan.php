<?php

class Laporan extends CI_Controller{

    public function Peminjaman()
    {
        $data['content']   = 'laporan/v_laporan';
        $data['title'] = 'Laporan Peminjaman';
        $this->load->view('v_dashboard',$data);
    }

    
}