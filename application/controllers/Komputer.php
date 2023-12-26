<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komputer extends CI_Controller
{
    public function index()
    {
        $data['komputer'] = $this->M_komputer->get_komputer();
        $this->template->load('back/template', 'back/komputer/komputer', $data);
    }

    public function save_komputer()
    {
        $this->form_validation->set_rules('komputer', 'Komputer', 'trim|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_komputer' => $this->input->post('id_komputer'),
                'komputer' => $this->input->post('komputer')
            ];

            $this->M_komputer->insert($data);
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Disimpan</div>');
            redirect('komputer', 'refresh');
        } else {
            $this->index();
        }
    }


    public function edit_komputer($id)
    {
        $data['kmptr'] = $this->M_komputer->get_id_komputer($id);
        if ($data['kmptr']) {
            $data['komputer'] = $this->M_komputer->get_komputer();
            $this->template->load('back/template', 'back/komputer/edit_komputer', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Tidak Ada</div>');
            redirect('komputer', 'refresh');
        }
    }

    public function update_komputer()
    {
        $data = [
            'id_komputer' => $this->input->post('id_komputer'),
            'komputer' => $this->input->post('komputer')
        ];

        $this->M_komputer->update($this->input->post('id_komputer'), $data);
        $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Di Update</div>');
        redirect('komputer', 'refresh');
    }

    public function delete_komputer($id)
    {
        $delete = $this->M_komputer->get_id_komputer($id);

        if ($delete) {
            $this->M_komputer->delete($id);
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus</div>');
            redirect('komputer', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Tidak Ada</div>');
            redirect('komputer', 'refresh');
        }
    }
}
