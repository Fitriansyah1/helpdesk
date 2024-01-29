<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpindahan extends CI_Controller
{
    public function index()
    {
        $data['perpindahan'] = $this->M_perpindahan->get_perpindahan();
        $this->template->load('back/template', 'back/perpindahan/data_perpindahan', $data);
    }
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    function cetak_perpindahan()
    {
        $data['perpindahan'] = $this->M_perpindahan->get_perpindahan();
        $this->load->view('back/perpindahan/perpindahan_print', $data);
    }
    function add_perpindahan()
    {
        $data['cadangan'] = $this->M_cadangan->get_cadangan();
        $data['unit'] = $this->M_unit->get_unit();
        $this->template->load('back/template', 'back/perpindahan/perpindahan', $data);
    }

    public function save_perpindahan()
    {
        $this->form_validation->set_rules('cadangan_id', 'Nama Komputer', 'trim|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_perpindahan' => $this->input->post('id_perpindahan'),
                'tgl' => $this->input->post('tgl'),
                'cadangan_id' => $this->input->post('cadangan_id'),
                'unit_id' => $this->input->post('unit_id'),
                'status' => $this->input->post('status'),
            ];

            $this->M_perpindahan->insert($data);
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Disimpan</div>');
            redirect('perpindahan', 'refresh');
        } else {
            $this->index();
        }
    }

    public function edit_perpindahan($id)
    {
        $data['prpndhn'] = $this->M_perpindahan->get_id_perpindahan($id);
        if ($data['prpndhn']) {
            $data['perpindahan'] = $this->M_perpindahan->get_perpindahan();
            $this->template->load('back/template', 'back/perpindahan/edit_perpindahan', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Tidak Ada</div>');
            redirect('perpindahan', 'refresh');
        }
    }

    public function update_perpindahan()
    {
        $data = [
            'id_perpindahan' => $this->input->post('id_perpindahan'),
            'tgl' => $this->input->post('tgl'),
            'cadangan_id' => $this->input->post('cadangan_id'),
            'unit_id' => $this->input->post('unit_id'),
            'status' => $this->input->post('status'),
        ];

        $this->M_perpindahan->update($this->input->post('id_perpindahan'), $data);
        $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Di Update</div>');
        redirect('perpindahan', 'refresh');
    }

    public function delete_perpindahan($id)
    {
        $delete = $this->M_perpindahan->get_id_perpindahan($id);

        if ($delete) {
            $this->M_perpindahan->delete($id);
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus</div>');
            redirect('perpindahan', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Tidak Ada</div>');
            redirect('perpindahan', 'refresh');
        }
    }
}
