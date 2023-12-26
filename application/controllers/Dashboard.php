<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['tiket_wait'] = $this->M_tiket->tiket_wait();
        $data['tiket_proses'] = $this->M_tiket->tiket_proses();
        $data['tiket_tutup'] = $this->M_tiket->tiket_tutup();
        $data['user'] = $this->M_tiket->jumlah_user();
        $this->template->load('back/template', 'back/dashboard', $data);
    }
}
