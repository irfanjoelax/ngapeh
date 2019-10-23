<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
        parent::__construct();
        
        // load model yang digunakan
		$this->load->model('subscribe_model');
    }
    
    // function untuk ambil data dari table database, parsing lewat javascript untuk datatable
    public function data()
    {
        $results    = $this->subscribe_model->get_all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>'.$no++.'</center>';
            $row[]  = '<center>'.$list->em_ss.'</center>';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    // function untuk insert data ke database melalui model
    public function insert()
	{
        $this->subscribe_model->go_insert();
        redirect(site_url('/'));
    }
}

/* End of file Controllername.php */
