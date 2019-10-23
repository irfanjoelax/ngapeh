<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
        parent::__construct();
        
        // validasi apakah pengakses sudah login ? 
        if ($this->session->userdata('status') != "login") {
			redirect(site_url('auth'));
        }
        
        // load model yang digunakan
		$this->load->model('informasi_model');
    }

    // function untuk update data ke database melalui model
    public function update($id)
	{
        $this->informasi_model->go_update($id);
        redirect(site_url('admin/index/sosmed/1'));
	}
}

/* End of file Informasi.php */
