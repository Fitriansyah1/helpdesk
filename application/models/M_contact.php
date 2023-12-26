<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_contact extends CI_Model
{
    function get_contact()
    {
        return $this->db->get('contact')->result();
    }
    function insert($data)
    {
        $this->db->insert('contact', $data);
    }
    function get_id_contact($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('contact')->row();
    }
    function delete($id)
    {
        $this->db->where('id',  $id);
        $this->db->delete('contact');
    }
}
