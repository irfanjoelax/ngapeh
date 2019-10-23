<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
		$this->load->model('user_model');
    }
    
    // function index untuk redirect ke view login 
    public function index()
    {
        $this->load->view('back/login');
    }

    // function untuk login
    public function login()
    {
        // init variabel untuk cek apakah data terdapat pada database
        $check  = $this->user_model->get_login()->num_rows();

        if ($check == 1) {
            // init variabel untuk data session
            $data  = $this->user_model->get_login()->row();

			$data_session = array(
                'id_usr' 		=> $data->id_usr,
                'nm_usr' 		=> $data->nm_usr,
                'em_usr' 		=> $data->em_usr,
                'pass_usr' 		=> $data->pass_usr,
				'status' 		=> "login"
			);

			// setting pembuatan session
            $this->session->set_userdata($data_session);
            
            redirect(site_url('admin'));
        }
        // jika data tidak ditemukan
        else {
            redirect(site_url('auth'));
        }
    }

    // function untuk logout halaman administrator
    public function logout(){
        // penghapusan session 
        $this->session->sess_destroy();
        
		redirect(site_url('/'));
    }	
    
    // function untuk mengubah data profil user admin yang login
	public function profile($id_user)
	{
		if (empty($this->input->post('prof_pass'))) {
            // jika inputan post password kosong
			$update = $this->user_model->update_profile('null',$id_user);
        } 
        else {
            // jika inputan post password tidak kosong
			$update = $this->user_model->update_profile('pass',$id_user);
		}

		if($update) {
            // mengambil data dari database ditampung dalam variable untuk diparsing
            $data  = $this->user_model->get_where($id_user);
    
            $data_session = array(
                'id_usr' 		=> $data->id_usr,
                'nm_usr' 		=> $data->nm_usr,
                'em_usr' 		=> $data->em_usr,
                'pass_usr' 		=> $data->pass_usr,
				'status' 		=> "login"
            );
            
            // setting pembuatan session
            $this->session->set_userdata($data_session);
            
            redirect(site_url('admin'));
        }
	}
}

/* End of file Auth.php */
