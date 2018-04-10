<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogger extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('Artikel');
		$this->load->helper('url_helper','date','file','pagination');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$url = $this->uri->segment(3);//mengambil kode untuk segmentasi paging
		$data['artikel'] = $this->Artikel->get_article($url);//ambil data dari Model
		$this->load->library('pagination');//menggunakan libraly paginatin
		$this->load->view('blogger/header');
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('blogger/tampil_blog', $data);
		$this->load->view('blogger/footer');
	}


	public function view(){
		$id = $this->uri->segment(3); //mengambil variabel dari url
		$data['show_article'] = $this->Artikel->get_article_by_id($id);//menyimpan hasil dari filtering data
		// Jika data tidak ditemukan akan di arahkan ke page 404
		if(empty($data['show_article'])){
			show_404();
		}
		//Meload View
		$this->load->view('blogger/header');
		$this->load->view('blogger/view', $data);
		$this->load->view('blogger/footer');
	}

	public function create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('artikel', 'Artikel', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
  
		//Jika validasi belum berjalan
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('blogger/header');
			$this->load->view('blogger/create');
			$this->load->view('blogger/footer');
		} else {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				// Data input ke model
				$data['input'] = array(
					'title' => $this->input->post('title'),
					'artikel' => $this->input->post('artikel'),
					'author' => $this->input->post('author'),
					'gambar' => $this->upload->data('file_name'),
					'tanggal' => date("Y/m/d")
				);
				//query tambah data
				$this->Artikel->set_article(0,$data['input']);
				//kembali ke home
				redirect('blogger');
			}
		}
	}

	public function edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('artikel', 'artikel', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');

		//Mendapatkan key id dati Route
		$id = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['show_article'] = $this->Artikel->get_article_by_id($id);
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('blogger/header');
			$this->load->view('blogger/edit',$data);
			$this->load->view('blogger/footer');
		} else {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			//Memulai Upload
			$this->load->library('upload', $config);
			//Cek kondisi upload
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				// Data input ke model
				$data['input'] = array(
					'title' => $this->input->post('title'),
					'author' => $this->input->post('author'),
					'artikel' => $this->input->post('artikel'),
					'gambar' => $this->upload->data('file_name'),
					'tanggal' => date("Y/m/d")
				);
				//Delete Gambar sebelumnya
				// $file = $this->Artikel->get_article_by_id($id);
				// $data['delete_upload'] = base_url().'assets/img/'.$file['gambar'];
				// unlink($path);
				//query Edit Data
				$this->Artikel->set_article($id,$data['input']);
				//kembali ke home
				redirect('blogger');
			}
		}	
	}
	public function delete(){
		$id = $this->uri->segment(3);
		$this->Artikel->delete_article($id);
		redirect('blogger','refresh');
	}
}

/* End of file database_controller.php */
/* Location: ./application/controllers/database_controller.php */
