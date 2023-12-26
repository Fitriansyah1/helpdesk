<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatiket extends CI_Controller
{
    public function index()
    {
        $data['tiket'] = $this->M_tiket->get_tiket();
        $data['no_tiket'] = $this->M_tiket->no_tiket();
        $data['komputer'] = $this->M_komputer->get_komputer();
        $data['unit'] = $this->M_unit->get_unit();
        $data['user'] = $this->M_karyawan->get_karyawan();
        $this->template->load('back/template', 'back/tiket/data_tiket', $data);
    }
    function add_tiket()
    {
        $data['komputer'] = $this->M_komputer->get_komputer();
        $data['unit'] = $this->M_unit->get_unit();
        $this->template->load('back/template', 'back/tiket/data_tiket', $data);
    }
    function save_tiket()
    {
        $this->form_validation->set_rules('judul_tiket', 'Judul Tiket', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            if ($_FILES['gambar_tiket']['error'] <> 4) {

                $config['upload_path'] = './assets/images/tiket/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $nama_file = $this->input->post('no_tiket') . date('Ymdhis');
                $config['file_name'] = $nama_file;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_tiket')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">' . $error['error'] . '</div>');
                    redirect('tiket', 'refresh');
                } else {
                    $gambar_tiket = $this->upload->data();

                    $data = array(
                        'no_tiket' => $this->input->post('no_tiket'),
                        'judul_tiket' => $this->input->post('judul_tiket'),
                        'komputer_id' => $this->input->post('komputer_id'),
                        'unit_id' => $this->input->post('unit_id'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status_tiket' => 0,
                        'user_id' => $this->session->userdata('id_user'),
                        'gambar_tiket' => $this->upload->data('file_name'),
                        'tgl_daftar' => date('Y-m-d'),
                    );

                    $this->M_tiket->insert($data);
                    $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Disimpan</div>');
                    redirect('tiket', 'refresh');
                }
            } else {
                $data = array(
                    'no_tiket' => $this->input->post('no_tiket'),
                    'judul_tiket' => $this->input->post('judul_tiket'),
                    'komputer_id' => $this->input->post('komputer_id'),
                    'unit_id' => $this->input->post('unit_id'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'status_tiket' => 0,
                    'user_id' => $this->session->userdata('id_user'),
                    'tgl_daftar' => date('Y-m-d'),
                );

                $this->M_tiket->insert($data);
                $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Disimpan</div>');
                redirect('Datatiket', 'refresh');
            }
        } else {
            $this->add_tiket();
        }
    }
    function save_tiket_konfimasi()
    {
        $this->form_validation->set_rules('status_tiket', 'Status Tiket', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'status_tiket' => $this->input->post('status_tiket'),
                'username' => $this->input->post('username'),


            );

            $this->M_tiket->update($this->input->post('id_tiket'), $data);
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data Tiket Berhasil diUpdate</div>');
            redirect('tiket', 'refresh');
        }
    }
}
