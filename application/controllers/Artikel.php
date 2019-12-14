<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

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
    }

    // function untuk ambil data dari table database, parsing lewat javascript untuk datatable
    public function data()
    {
        $results    = $this->artikel_model->get_all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>' . $no++ . '</center>';
            $row[]  =   '<center>
				            <img class="lazyload" data-src="' . base_url('back/artikel/$list->gbr_art') . '" width="80" height="50">
                        </center>';
            $row[]  = $list->jdl_art;
            $row[]  = '<center>' . $list->hit_art . '</center>';
            $row[]  = '
                <center>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="' . site_url('admin/index/artikel-ubah/' . $list->id_art) . '" class="btn btn-sm btn-success" title="Edit">
                            <i class="fas fa-edit fa-sm"></i>
                        </a>
                        <button onclick="deleteData(' . $list->id_art . ')" class="btn btn-sm btn-danger" title="Delete">
                            <i class="fas fa-trash fa-sm"></i>
                        </button>
                    </div>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    // function untuk insert data ke database melalui model
    public function insert()
    {
        $this->artikel_model->go_insert();
        redirect(site_url('admin/index/artikel'));
    }

    // function untuk update data ke database melalui model
    public function update($id)
    {
        $this->artikel_model->go_update($id);
        redirect(site_url('admin/index/artikel'));
    }

    // function untuk update data ke database melalui model
    public function delete($id)
    {
        $this->artikel_model->go_delete($id);
    }
}

/* End of file artikel.php */
