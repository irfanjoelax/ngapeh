<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model {

    private $_table = 't_ss';

    // function untuk mengambil seluruh data pada database
    public function get_all()
	{
		return $this->db->order_by('id_ss','DESC')->get($this->_table)->result();
    }

    // function untuk mengambil data berupa angka
    public function get_number()
    {
        return $this->db->get($this->_table)->num_rows();
    }

    // function untuk insert data kedalam database
    public function go_insert()
    {
        $input = array(
            'em_ss'   => $this->input->post('inp_em',TRUE), 
        );

        return $this->db->insert($this->_table, $input);
    }
    

}

/* End of file Subscribe_model.php */
