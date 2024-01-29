<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tanggapan extends CI_Model
{
    function get_tanggapan()
    {
        return $this->db->get('detail_tiket')->result();
    }

    function get_id_tanggapan($id)
    {
        $this->db->where('id_detail', $id);
        return $this->db->get('detail_tiket')->row();
    }

    function delete($id)
    {
        $this->db->where('id_detail',  $id);
        $this->db->delete('detail_tiket');
    }
}
