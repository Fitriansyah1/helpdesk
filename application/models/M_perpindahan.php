<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perpindahan extends CI_Model
{
    function get_perpindahan()
    {
        return $this->db->get('perpindahan')->result();
    }
    function insert($data)
    {
        return $this->db->insert('perpindahan', $data);
    }

    function get_id_perpindahan($id)
    {
        $this->db->where('id_perpindahan', $id);
        return $this->db->get('perpindahan')->row();
    }

    function update($id, $data)
    {
        $this->db->where('id_perpindahan',  $id);
        $this->db->update('perpindahan', $data);
    }

    function delete($id)
    {
        $this->db->where('id_perpindahan',  $id);
        $this->db->delete('perpindahan');
    }
}
