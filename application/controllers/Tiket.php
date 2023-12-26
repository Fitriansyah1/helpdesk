<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    public function index()
    {
        $data['tiket'] = $this->M_tiket->get_tiket();
        $data['no_tiket'] = $this->M_tiket->no_tiket();
        $data['komputer'] = $this->M_komputer->get_komputer();
        $data['unit'] = $this->M_unit->get_unit();
        $data['user'] = $this->M_karyawan->get_karyawan();
        $this->template->load('back/template', 'back/tiket/tiket', $data);
    }
    function add_tiket()
    {
        $data['komputer'] = $this->M_komputer->get_komputer();
        $data['unit'] = $this->M_unit->get_unit();
        $data['tiket'] = $this->M_tiket->get_tiket();
        $this->template->load('back/template', 'back/tiket/tiket', $data);
    }
    function save_tiket()
    {
        $this->form_validation->set_rules('judul_tiket', 'Judul Tiket', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('cadangan', 'Perlu Cadangan', 'trim|required');

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
                        'deskripsi_komputer' => $this->input->post('deskripsi_komputer'),
                        'cadangan' => $this->input->post('cadangan'),
                        'unit_id' => $this->input->post('unit_id'),
                        'telpon' => $this->input->post('telpon'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'status_tiket' => 0,
                        'user_id' => $this->session->userdata('id_user'),
                        'username_id' => $this->input->post('username_id'),
                        'gambar_tiket' => $this->upload->data('file_name'),
                        'tgl_daftar' => date('Y-m-d'),
                    );

                    $this->M_tiket->insert($data);
                    $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Disimpan</div>');
                    redirect('Datatiket', 'refresh');
                }
            } else {
                $data = array(
                    'no_tiket' => $this->input->post('no_tiket'),
                    'judul_tiket' => $this->input->post('judul_tiket'),
                    'komputer_id' => $this->input->post('komputer_id'),
                    'deskripsi_komputer' => $this->input->post('deskripsi_komputer'),
                    'cadangan' => $this->input->post('cadangan'),
                    'unit_id' => $this->input->post('unit_id'),
                    'telpon' => $this->input->post('telpon'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'status_tiket' => 0,
                    'user_id' => $this->session->userdata('id_user'),
                    'username_id' => $this->input->post('username_id'),
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


    function save_tiket_waiting()
    {
        $this->form_validation->set_rules('status_tiket', 'Status Tiket', 'trim|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'status_tiket' => $this->input->post('status_tiket'),
                'waktu_mulai' => $this->input->post('waktu_mulai'),
            );

            $this->M_tiket->update($this->input->post('id_tiket'), $data);

            // Pesan flash data untuk berhasil diupdate
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">Data Tiket Berhasil diUpdate</div>');

            // Redirect ke halaman 'Datatiket'
            redirect('Datatiket', 'refresh');
        }
    }

    function detail_tiket($no_tiket)
    {
        $data['tiket'] = $this->M_tiket->get_no_tiket($no_tiket);
        if ($data['tiket']) {
            $data['title'] = 'Detail Tiket' . $data['tiket']->no_tiket;
            $this->template->load('back/template', 'back/tiket/detail_tiket', $data);
        }
    }

    function save_tanggapan()
    {
        $this->form_validation->set_rules('tanggapan', 'Tanggapan Tiket', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            if ($_FILES['gambar_tanggapan']['error'] <> 4) {

                $config['upload_path'] = './assets/images/tanggapan/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $nama_file = $this->input->post('tiket_id') . date('Ymdhis');
                $config['file_name'] = $nama_file;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_tanggapan')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">' . $error['error'] . '</div>');
                    $this->index();
                } else {
                    if ($this->input->post('id_tiket')) {
                        $data = array(
                            'status_tiket' => 2,
                        );
                        $this->M_tiket->update($this->input->post('id_tiket'), $data);
                    }
                    $gambar_tanggapan = $this->upload->data();
                    $data = array(
                        'tiket_id' => $this->input->post('id_tiket'),
                        'tanggapan' => $this->input->post('tanggapan'),

                        'gambar_tanggapan' => $this->upload->data('file_name'),
                        'waktu_tanggapan' => date('Y-m-d'),

                    );

                    $this->M_tiket->insert_tanggapan($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Di Simpan</div>');
                    redirect('Datatiket', 'refresh');
                }
            } else {
                if ($this->input->post('id_tiket')) {
                    $data = array(
                        'status_tiket' => 2,
                    );
                    $this->M_tiket->update($this->input->post('id_tiket'), $data);
                }
                $data = array(
                    'tiket_id' => $this->input->post('id_tiket'),
                    'tanggapan' => $this->input->post('tanggapan'),
                    'waktu_tanggapan' => date('d-m-Y H:i:s'),

                );

                $this->M_tiket->insert_tanggapan($data);
                $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Di Simpan</div>');
                redirect('Datatiket', 'refresh');
            }
        }
    }

    function save_close_tiket()
    { {
            $this->form_validation->set_rules('status_tiket', 'Status Tiket', 'trim|required');

            $this->form_validation->set_message('required', '{field} Harus di isi');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ($this->form_validation->run() == FALSE) {
                $this->index();
            } else {
                $data = array(
                    'status_tiket' => $this->input->post('status_tiket'),

                );

                $this->M_tiket->update($this->input->post('id_tiket'), $data);
                $this->session->set_flashdata('message', '<div id="alert" class="alert alert-info alert-dismissible fade show" role="alert">Data Berhasil Di Tutup</div>');
                redirect('Datatiket', 'refresh');
            }
        }
    }

    function delete_tiket($id)
    {
        $delete = $this->M_tiket->get_id_tiket($id);

        if ($delete) {
            $this->M_tiket->delete($id);
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus!</div>');
            redirect('Datatiket', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div id="alert" class="alert alert-info alert-dismissible fade show" role="alert">Data tidak ditemukan.</div>');
            redirect('Datatiket', 'refresh');
        }
    }
}
