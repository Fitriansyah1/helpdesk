<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tiket extends CI_Model
{
    function get_tiket()
    {
        return $this->db->get('tiket')->result();
    }
    function get_no_tiket($no_tiket)
    {
        $this->db->join('user', 'tiket.user_id = user.id_user', 'left');
        $this->db->join('detail_tiket', 'tiket.id_tiket = detail_tiket.tiket_id', 'left');
        $this->db->where('no_tiket', $no_tiket);

        return $this->db->get('tiket')->row();
    }

    function no_tiket()
    {
        // Set zona waktu ke Asia/Jakarta

        // Ambil nomor urut terakhir dari tabel tiket untuk tanggal hari ini
        $q = $this->db->query("SELECT MAX(RIGHT(no_tiket,4)) AS no_tiket FROM tiket WHERE DATE(tgl_daftar)=CURDATE()");

        // Periksa apakah terdapat data nomor tiket untuk tanggal hari ini
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                // Ambil nomor tiket terakhir
                $last_number = (int) $k->no_tiket;

                // Tambahkan 1 ke nomor tiket terakhir
                $new_number = $last_number + 1;

                // Format nomor tiket dengan 4 digit
                $kd = sprintf("%04s", $new_number);
            }
        } else {
            // Jika tidak ada, set nomor tiket pertama sebagai 0001
            $kd = "001";
        }

        // Ambil id_komputer dari tabel komputer
        $komputer_query = $this->db->query("SELECT id_komputer FROM komputer ORDER BY RAND() LIMIT 1");
        $komputer_result = $komputer_query->row();
        $id_komputer = $komputer_result->id_komputer;

        // Ambil id_uni dari tabel unit
        $unit_query = $this->db->query("SELECT id_unit FROM unit ORDER BY RAND() LIMIT 1");
        $unit_result = $unit_query->row();
        $id_unit = $unit_result->id_unit;

        // Gabungkan tanggal hari ini dengan nomor urut tiket, id_komputer, dan id_unit
        return $id_komputer . '-' . $id_unit . '-' . date('d') . '-' . $kd;
    }



    function insert($data)
    {
        return $this->db->insert('tiket', $data);
    }
    function insert_tanggapan($data)
    {
        return $this->db->insert('detail_tiket', $data);
    }
    function get_id_tiket($id)
    {
        $this->db->where('id_tiket', $id);
        return $this->db->get('tiket')->row();
    }
    function delete($id)
    {
        $this->db->where('id_tiket',  $id);
        $this->db->delete('tiket');
    }
    function update($id, $data)
    {
        $this->db->where('id_tiket', $id);
        $this->db->update('tiket', $data);
    }

    function tiket_wait()
    {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->where('status_tiket', 0);

        return $this->db->get()->num_rows();
    }
    function tiket_proses()
    {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->where('status_tiket', 1);

        return $this->db->get()->num_rows();
    }

    function tiket_tutup()
    {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->where('status_tiket', 3);

        return $this->db->get()->num_rows();
    }
    function jumlah_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->num_rows();
    }
}
