<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();
		       
        // load model yang digunakan
		$this->load->model('artikel_model');
		$this->load->model('informasi_model');

		// cache control
		$this->output->cache(60);
	}

	public function index()
	{
		$parsing = array(
			// banner atas
			'baru_satu' 	=> $this->artikel_model->get_latest()->row(), 
			'pop_satu' 		=> $this->artikel_model->get_popular()->row(), 
			'pop_dua' 		=> $this->artikel_model->get_popular()->row(1),
			// banner bagian sidebar
			'populars' 		=> $this->artikel_model->get_popular(6)->result(),
			// konten bawah 
			'terbaru' 		=> $this->artikel_model->get_latest(4)->result(), 
			// informasi media sosial dan kontak
			'inf' 			=> $this->informasi_model->get_where(1), 
		);
		$this->load->view('front/welcome', $parsing);
	}

	public function artikel_detail($slug)
	{
		$artikel = $this->artikel_model->get_slug($slug);
		// ubah hit dengan tambah satu
		$this->db->where('slug_art', $slug)->update('t_art', array('hit_art' => $artikel->hit_art+1 ));

		// parsing data
		$parsing = array(
			// artikel detail by slug
			'art' 			=> $this->artikel_model->get_slug($slug),  
			// area berita populer dan sidebar beranda
			'populars' 		=> $this->artikel_model->get_popular(7)->result(), 
			// informasi media sosial dan kontak
			'inf' 			=> $this->informasi_model->get_where(1), 
		);
		$this->load->view('front/artikel_detail', $parsing);
	}

	public function kategori($kat)
	{
		$parsing = array(
			// banner atas
			'terbaru' 		=> $this->artikel_model->get_kategori($kat,10,'id_art')->result(), 
			// area berita populer dan sidebar beranda
			'populer' 		=> $this->artikel_model->get_kategori($kat,7,'hit_art')->result(), 
			// informasi media sosial dan kontak
			'inf' 			=> $this->informasi_model->get_where(1), 
		);
		$this->load->view('front/kategori', $parsing);
	}

	public function cari()
	{
		$input = $this->input->post('inp_cari',TRUE);

		$parsing = array(
			// banner bagian sidebar
			'populer' 	=> $this->artikel_model->get_popular(10)->result(),
			// konten bawah 
			'arts' 		=> $this->artikel_model->get_search($input), 
			// informasi media sosial dan kontak
			'inf' 		=> $this->informasi_model->get_where(1), 
		);
		$this->load->view('front/cari', $parsing);
	}
}
