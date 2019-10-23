<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
        parent::__construct();
        
        // validasi apakah pengakses sudah login ? 
        if ($this->session->userdata('status') != "login") {
			redirect(site_url('auth'));
        }
        
        // load model yang digunakan
		$this->load->model('artikel_model');
		$this->load->model('subscribe_model');
		$this->load->model('informasi_model');
	}

    // function index untuk redirect ke view tertentu pada halaman admin administrator
    public function index($view='default', $param=null)
    {
        switch ($view) {
            case 'sosmed':
                $parsing = array(
                    'inf'     => $this->informasi_model->get_where($param),
                );
                $this->load->view('back/v_sosmed', $parsing);
                break;
            case 'subscribe':
                $this->load->view('back/v_subscribe');
                break;
            case 'filemanager':
                $this->load->view('back/v_filemanager');
                break;
            case 'artikel':
                $this->load->view('back/v_artikel');
                break;
            case 'artikel-tambah':
                $this->load->view('back/v_artikel_tambah');
                break;
            case 'artikel-ubah':
                $parsing = array(
                    'art'     => $this->artikel_model->get_where($param),
                );
                $this->load->view('back/v_artikel_ubah', $parsing);
                break;
            default:
                // parsing data ke view
                $parsing = array(
                    'total_art'         => $this->artikel_model->get_number(),
                    'total_sub'         => $this->subscribe_model->get_number(),
                    'total_Berita'      => $this->artikel_model->get_number('Berita'),
                    'total_Daerah'      => $this->artikel_model->get_number('Daerah'),
                    'total_Hits'        => $this->artikel_model->get_number('Hits'),
                    'total_Review'      => $this->artikel_model->get_number('Review'),
                    'total_Cerita'      => $this->artikel_model->get_number('Cerita'),
                    'total_Tips'        => $this->artikel_model->get_number('Tips'),
                    'total_Gosip'       => $this->artikel_model->get_number('Gosip'),
                    'total_Investigasi' => $this->artikel_model->get_number('Investigasi'),
                    'total_Riwayat'     => $this->artikel_model->get_number('Riwayat'),
                    'total_Ceramah'     => $this->artikel_model->get_number('Ceramah'),
                    'total_Khutbah'     => $this->artikel_model->get_number('Khutbah'),
                    'total_Artikel'     => $this->artikel_model->get_number('Artikel'),
                );

                $this->load->view('back/admin', $parsing);
                break;
        }
    }

}

/* End of file Admin.php */
