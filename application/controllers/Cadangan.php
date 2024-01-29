<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadangan extends CI_Controller
{
    public function index()
    {
        $data['cadangan'] = $this->M_cadangan->get_cadangan();
        $this->template->load('back/template', 'back/cadangan/data_cadangan', $data);
    }
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    function cetak_cadangan()
    {
        $data['cadangan'] = $this->M_cadangan->get_cadangan();
        $this->load->view('back/cadangan/cadangan_print', $data);
    }
    function add_cadangan()
    {
        $this->template->load('back/template', 'back/cadangan/cadangan');
    }

    public function save_cadangan()
    {
        $this->form_validation->set_rules('nama_cadangan', 'Nama_Cadangan', 'trim|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_cadangan' => $this->input->post('id_cadangan'),
                'nama_cadangan' => $this->input->post('nama_cadangan'),
                'tipe_cadangan' => $this->input->post('tipe_cadangan'),
                'jumlah' => $this->input->post('jumlah'),
                'kondisi' => $this->input->post('kondisi'),
            ];

            $this->M_cadangan->insert($data);
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Disimpan</div>');
            redirect('cadangan', 'refresh');
        } else {
            $this->index();
        }
    }


    public function edit_cadangan($id)
    {
        $data['cdkmptr'] = $this->M_cadangan->get_id_cadangan($id);
        if ($data['cdkmptr']) {
            $data['cadangan'] = $this->M_cadangan->get_cadangan();
            $this->template->load('back/template', 'back/cadangan/edit_cadangan', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Tidak Ada</div>');
            redirect('cadangan', 'refresh');
        }
    }

    public function update_cadangan()
    {
        $data = [
            'id_cadangan' => $this->input->post('id_cadangan'),
            'nama_cadangan' => $this->input->post('nama_cadangan'),
            'tipe_cadangan' => $this->input->post('tipe_cadangan'),
            'jumlah' => $this->input->post('jumlah'),
            'kondisi' => $this->input->post('kondisi'),
        ];

        $this->M_cadangan->update($this->input->post('id_cadangan'), $data);
        $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Di Update</div>');
        redirect('cadangan', 'refresh');
    }

    public function delete_cadangan($id)
    {
        $delete = $this->M_cadangan->get_id_cadangan($id);

        if ($delete) {
            $this->M_cadangan->delete($id);
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus</div>');
            redirect('cadangan', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Tidak Ada</div>');
            redirect('cadangan', 'refresh');
        }
    }
}
