<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proses_tiket extends CI_Controller
{
    public function index()
    {
        $data['tiket'] = $this->M_tiket->get_tiket();
        $data['no_tiket'] = $this->M_tiket->no_tiket();
        $data['komputer'] = $this->M_komputer->get_komputer();
        $data['unit'] = $this->M_unit->get_unit();
        $data['user'] = $this->M_karyawan->get_karyawan();
        $this->load->view('back/proses_tiket', $data);
    }
}
