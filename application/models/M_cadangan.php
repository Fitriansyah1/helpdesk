<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cadangan extends CI_Model
{
    function get_cadangan()
    {
        return $this->db->get('cadangan')->result();
    }
    function insert($data)
    {
        return $this->db->insert('cadangan', $data);
    }

    function get_id_cadangan($id)
    {
        $this->db->where('id_cadangan', $id);
        return $this->db->get('cadangan')->row();
    }

    function update($id, $data)
    {
        $this->db->where('id_cadangan',  $id);
        $this->db->update('cadangan', $data);
    }

    function delete($id)
    {
        $this->db->where('id_cadangan',  $id);
        $this->db->delete('cadangan');
    }
}
