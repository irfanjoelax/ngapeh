<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {

    private $_table = "t_inf";

    // function untuk mengambil data where sesuai id_inf pada database
    public function get_where($id)
    {
        return $this->db->where('id_inf',$id)->get($this->_table)->row();
    }

    // function untuk update data kedalam database
    public function go_update($id)
    {
        $input = array(
            'fb_inf'   => $this->input->post('inp_fb',TRUE), 
            'tw_inf'   => $this->input->post('inp_tw',TRUE), 
            'ig_inf'   => $this->input->post('inp_ig',TRUE), 
            'yt_inf'   => $this->input->post('inp_yt',TRUE), 
            'hp_inf'   => $this->input->post('inp_hp',TRUE), 
            'em_inf'   => $this->input->post('inp_em',TRUE), 
        );

        return $this->db->where('id_inf', $id)->update($this->_table, $input);
    }

}

/* End of file Informasi_model.php */
