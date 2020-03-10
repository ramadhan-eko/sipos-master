<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getUser()
    {
        $data = [
            'email' => $this->session->userdata('email')
        ];
        return $this->db->get_where('user', $data)->row_array();
    }

    public function getUserMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function getUserMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function editMenu($id)
    {
        $data = [
            'menu' => $this->input->post('menu')
        ];
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('user_menu', $data);
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user_menu');
    }
}
