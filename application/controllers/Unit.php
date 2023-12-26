<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
{
    public function index()
    {
        $data['unit'] = $this->M_unit->get_unit();
        $this->template->load('back/template', 'back/unit/unit', $data);
    }

    public function save_unit()
    {
        $this->form_validation->set_rules('unit', 'Unit', 'trim|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_unit' => $this->input->post('id_unit'),
                'unit' => $this->input->post('unit')
            ];

            $this->M_unit->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info"> Data Berhasil Di Simpan</div>');
            redirect('unit', 'refresh');
        } else {
            $this->index();
        }
    }

    public function edit_unit($id)
    {
        $data['unitt'] = $this->M_unit->get_id_unit($id);
        if ($data['unitt']) {
            $data['unit'] = $this->M_unit->get_unit();
            $this->template->load('back/template', 'back/unit/edit_unit', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Tidak Ada</div>');
            redirect('unit', 'refresh');
        }
    }

    public function update_unit()
    {
        $data = [
            'id_unit' => $this->input->post('id_unit'),
            'unit' => $this->input->post('unit')
        ];

        $this->M_unit->update($this->input->post('id_unit'), $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Di Update</div>');
        redirect('unit', 'refresh');
    }

    public function delete_unit($id)
    {
        $delete = $this->M_unit->get_id_unit($id);

        if ($delete) {
            $this->M_unit->delete($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger"> Data Berhasil Dihapus</div>');
            redirect('unit', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-success">Data Tidak Ada</div>');
            redirect('unit', 'refresh');
        }
    }
}
