<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tentang extends CI_Model
{

    function tampil_tentang()
    {
        return $this->db->get('tentang')->result_array();
    }

    public function add_form_tentang($id)
    {
        $data = [
            "tentang" => $this->input->post('tentang', true),
        ];

        $this->db->where('id', $id);
        $this->db->update('tentang', $data);
    }
}
