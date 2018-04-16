<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogger extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Artikel');
		$this->load->helper('url_helper','file');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['artikel'] = $this->Artikel->get_article();
		$this->load->view('blogger/header');
		$this->load->view('blogger/tampil_blog', $data);
		$this->load->view('blogger/footer');
	}


	public function view(){
		$id = $this->uri->segment(3);
		$data['show_article'] = $this->Artikel->get_article_by_id($id);
		if(empty($data['show_article'])){
			show_404();
		}
		$this->load->view('blogger/header');
		$this->load->view('blogger/view', $data);
		$this->load->view('blogger/footer');
	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
  
		if ($this->form_validation->run() == FALSE) {
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
				$data['input'] = array(
					'title' => $this->input->post('title'),
					'artikel' => $this->input->post('artikel'),
					'author' => $this->input->post('author'),
					'gambar' => $this->upload->data('file_name'),
					'tanggal' => date("Y/m/d")
				);
				$this->Artikel->set_article(0,$data['input']);
				redirect('blogger');
			}
		}
	}

	public function edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('artikel', 'artikel', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');

		$id = $this->uri->segment(3);
		$data['show_article'] = $this->Artikel->get_article_by_id($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('blogger/header');
			$this->load->view('blogger/edit',$data);
			$this->load->view('blogger/footer');
		} else {
				$data['input'] = array(
					'title' => $this->input->post('title'),
					'author' => $this->input->post('author'),
					'artikel' => $this->input->post('artikel')
				);
				$this->Artikel->set_article($id,$data['input']);
				redirect('blogger');
			}
		}	

	public function delete(){
		$id = $this->uri->segment(3);
		$this->Artikel->delete_article($id);
		redirect('blogger','refresh');
	}
}
