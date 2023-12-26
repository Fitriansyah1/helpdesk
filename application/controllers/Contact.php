<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $this->load->view('back/contact');
    }
    function data_contact()
    {
        $data['contact'] = $this->M_contact->get_contact();
        $this->template->load('back/template', 'back/contact/data_contact', $data);
    }

    function save_contact()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'name' => $this->input->post('name'),
                'telpon' => $this->input->post('telpon'),
                'dari_unit' => $this->input->post('dari_unit'),
                'message' => $this->input->post('message'),
            ];

            $this->M_contact->insert($data);
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Pertanyaan Berhasil Di Kirim</div>');
            redirect('contact', 'refresh');
        } else {
            $this->index();
        }
    }
    public function delete_contact($id)
    {
        $delete = $this->M_contact->get_id_contact($id);

        if ($delete) {
            $this->M_contact->delete($id);
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus</div>');
            redirect('Contact/data_contact', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Tidak Ada</div>');
            redirect('contact', 'refresh');
        }
    }
}
