<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getUser()
    {
        $data = [
            'email' => $this->session->userdata('email')
        ];
        return $this->db->get_where('user', $data)->row_array();
    }

    public function getUserRole()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function insertRole()
    {
        $data = [
            'role' => $this->input->post('role')
        ];
        return $this->db->insert('user_role', $data);
    }

    public function editRole($id)
    {
        $data = [
            'role' => $this->input->post('role')
        ];
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('user_role', $data);
    }

    public function deleteRole($role_id)
    {
        $this->db->where('id', $role_id);
        return $this->db->delete('user_role');
    }

    public function getUserRoleById($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }

    public function getUserMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    function getAllProduk()
    {
        $hasil = $this->db->get('tbl_produk');
        return $hasil->result();
    }
}
