<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_komputer extends CI_Model
{
    function get_komputer()
    {
        return $this->db->get('komputer')->result();
    }
    function insert($data)
    {
        return $this->db->insert('komputer', $data);
    }

    function get_id_komputer($id)
    {
        $this->db->where('id_komputer', $id);
        return $this->db->get('komputer')->row();
    }

    function update($id, $data)
    {
        $this->db->where('id_komputer',  $id);
        $this->db->update('komputer', $data);
    }

    function delete($id)
    {
        $this->db->where('id_komputer',  $id);
        $this->db->delete('komputer');
    }
}
