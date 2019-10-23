<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

    private $_table = "t_art";

    // function untuk mengambil seluruh data pada database
    public function get_all()
    {
        return $this->db->order_by('id_art','DESC')->get($this->_table)->result();
    }
    
    // function untuk mengambil seluruh data pada database
    public function get_kategori($kat, $limit, $order)
    {
        return $this->db->order_by($order,'DESC')->where('kat_art',$kat)->limit($limit)->get($this->_table);
    }
    
    // function untuk mengambil data where sesuai id_art pada database
    public function get_where($id)
    {
        return $this->db->where('id_art',$id)->get($this->_table)->row();
    }
    
    // function untuk mengambil data where sesuai id_art pada database
    public function get_slug($slug)
    {
        return $this->db->where('slug_art',$slug)->get($this->_table)->row();
    }
    
    // function untuk mengambil data limit custom diurutkan sesuai hit_art
    public function get_popular($limit=null)
    {
        if ($limit == null){
            return $this->db->order_by('hit_art','DESC')->get($this->_table);
        } 
        else {
            return $this->db->order_by('hit_art','DESC')->limit($limit)->get($this->_table);
        }
    }
    
    // function untuk mengambil data limit custom diurutkan sesuai id_art
    public function get_latest($limit=null)
    {
        if ($limit == null){
            return $this->db->order_by('id_art','DESC')->get($this->_table);
        } 
        else {
            return $this->db->order_by('id_art','DESC')->limit($limit)->get($this->_table);
        }
        
    }

    // function untuk mengambil data berupa angka
    public function get_number($where=null)
    {
        if ($where == null) {
            return $this->db->get($this->_table)->num_rows();
        }
        else {
            return $this->db->where('kat_art',$where)->get($this->_table)->num_rows();
        }
    }

    // function untuk mengambil data where sesuai inputan dari form search
    public function get_search($param)
    {
        $this->db->like('jdl_art',$param);
		$this->db->or_like('isi_art',$param);
		$this->db->order_by('hit_art','DESC');
        return $this->db->limit(10)->get($this->_table)->result();
    }

    // function untuk insert data kedalam database
    public function go_insert()
    {
        $input = array(
            'kat_art'   => $this->input->post('inp_kat', TRUE),
            'jdl_art'   => ucwords($this->input->post('inp_jdl',TRUE)), 
            'slug_art'  => url_title($this->input->post('inp_jdl'), 'dash', TRUE),
            'gbr_art'   => $this->_upload_image(),
            'isi_art'   => $this->input->post('inp_isi', TRUE),
            'tgl_art'   => date('Y-m-d'),
            'hit_art'   => 0
        );

        return $this->db->insert($this->_table, $input);
    }
    
    // function untuk update data kedalam database
    public function go_update($id)
    {
        $input1 = array(
            'kat_art'   => $this->input->post('inp_kat', TRUE),
            'jdl_art'   => ucwords($this->input->post('inp_jdl',TRUE)), 
            'slug_art'  => url_title($this->input->post('inp_jdl'), 'dash', TRUE),
            'gbr_art'   => $this->_upload_image(),
            'isi_art'   => $this->input->post('inp_isi', TRUE),
        );
        
        $input2 = array(
            'kat_art'   => $this->input->post('inp_kat', TRUE),
            'jdl_art'   => ucwords($this->input->post('inp_jdl',TRUE)), 
            'slug_art'  => url_title($this->input->post('inp_jdl'), 'dash', TRUE),
            'isi_art'   => $this->input->post('inp_isi', TRUE),
        );

        if (empty($_FILES["inp_gbr"]["name"])) {    
            return $this->db->where('id_art', $id)->update($this->_table, $input2);
        }
        else {
            $row_gbr = $this->artikel_model->get_where($id);
            unlink("./back/artikel/$row_gbr->gbr_art");
            return $this->db->where('id_art', $id)->update($this->_table, $input1);
        }        
    }

    // function untuk delete data kedalam database
    public function go_delete($id)
    {
        $row_gbr = $this->artikel_model->get_where($id);
        unlink("./back/artikel/$row_gbr->gbr_art");
        return $this->db->delete($this->_table, array('id_art' => $id)); 
    }

     /**
     * function membuat upload image yang hanya dapat diakses di dalam class ini
     * dan terdapat fitur untuk compress ukuran pixel gambar
     *  */ 
    private function _upload_image()
	{
		$config['upload_path']          = './back/artikel';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		
	    if ($this->upload->do_upload('inp_gbr')) {
			$gbr = $this->upload->data();
			
			// config compress image
			$config['image_library']='gd2';
			$config['source_image']='./back/artikel/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 1000;
			$config['height']= 793;
            $config['new_image']= './back/artikel/'.$gbr['file_name'];
            $config['wm_text'] = 'ngapeh.co';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = './system/fonts/texb.ttf';
            $config['wm_font_size'] = '20';
            $config['wm_font_color'] = 'ffc107';
            $config['wm_vrt_alignment'] = 'bottom';
            $config['wm_hor_alignment'] = 'left';
            
            // load library resize codeigniter
			$this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $this->image_lib->watermark();

	        return $this->upload->data("file_name");
		}
    }

}

/* End of file Artikel_model.php */
