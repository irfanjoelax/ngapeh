<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $_table = 't_usr';

    // function untuk mengambil data sesuai field 
    public function get_login()
	{
        $where = array(
            'em_usr' => $this->input->post('log_email', TRUE), 
            'pass_usr' => md5($this->input->post('log_pass', TRUE))
        );

		return $this->db->get_where($this->_table,$where);
    }

    // function untuk mengambil data sesuai field id_usr
    public function get_where($id)
	{
        return $this->db->get_where($this->_table,array('id_usr' => $id))->row();
    }

    // function untuk mengubah data user melalui setting profil
    public function update_profile($pass, $id_usr)     
    {
        // array data jika inputan post html password tidak kosong
        $data_1 = array(
            'nm_usr' => ucwords($this->input->post('prof_nama', TRUE)), 
            'em_usr' => $this->input->post('prof_email', TRUE), 
            'pass_usr' => md5($this->input->post('prof_pass', TRUE)),
        );
        
        // array data jika inputan post html password kosong
        $data_2 = array(
            'nm_usr' => ucwords($this->input->post('prof_nama', TRUE)), 
            'em_usr' => $this->input->post('prof_email', TRUE),
        );

        if ($pass == "null") {
            return $this->db->where('id_usr',$id_usr)->update($this->_table, $data_2);
        }
        else {
            return $this->db->where('id_usr',$id_usr)->update($this->_table, $data_1);
        }
    }
}

/* End of file User_model.php */
