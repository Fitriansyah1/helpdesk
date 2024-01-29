<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanggapan extends CI_Controller
{
    public function index()
    {
        $data['tiket'] = $this->M_tiket->get_tiket();
        $data['tanggapan'] = $this->M_tanggapan->get_tanggapan();
        $this->template->load('back/template', 'back/tanggapan/data_tanggapan', $data);
    }
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    function cetak_tanggapan()
    {
        $data['tanggapan'] = $this->M_tanggapan->get_tanggapan();
        $this->load->view('back/tanggapan/tanggapan_print', $data);
    }

    public function delete_tanggapan($id)
    {
        $delete = $this->M_tanggapan->get_id_tanggapan($id);

        if ($delete) {
            $this->M_tanggapan->delete($id);
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus</div>');
            redirect('tanggapan', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Tidak Ada</div>');
            redirect('tanggapan', 'refresh');
        }
    }
}
