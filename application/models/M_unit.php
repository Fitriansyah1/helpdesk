<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_unit extends CI_Model
{
    function get_unit()
    {
        return $this->db->get('unit')->result();
    }
    function insert($data)
    {
        return $this->db->insert('unit', $data);
    }

    function get_id_unit($id)
    {
        $this->db->where('id_unit', $id);
        return $this->db->get('unit')->row();
    }

    function update($id, $data)
    {
        $this->db->where('id_unit',  $id);
        $this->db->update('unit', $data);
    }

    function delete($id)
    {
        $this->db->where('id_unit',  $id);
        $this->db->delete('unit');
    }
}
