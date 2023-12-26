<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detail_perbaikan extends CI_Controller
{
    function index($no_tiket)
    {
        $data['tiket'] = $this->M_tiket->get_no_tiket($no_tiket);
        if ($data['tiket']) {
            $data['title'] = 'Detail Tiket' . $data['tiket']->no_tiket;
            $this->load->view('back/detail_perbaikan', $data);
        }
    }
}
