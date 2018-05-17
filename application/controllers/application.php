<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		// 
		// Fetch the categories to display on the leftbar
		// 
		$data['categories'] = [];
		$blogs = scandir('./application/controllers/blogs');
		foreach($blogs as $index => $blog_file) {
			if ($index > 1) {
				$data['categories'][$index] = $blog_file;
				// echo print_r($data,true);
			}
		}

		$this->load->view('header', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function displayPage($content_to_load) {
		$this->load->view('header');
		$this->load->view($content_to_load);
		$this->load->view('footer');	
	}

	public function get_blogs() {
		$data['categories'] = [];
		$blogs = scandir('./application/controllers/blogs');
		foreach($blogs as $index => $blog_file) {
			if ($index > 1) {
				$data['categories'][$index] = $blog_file;
				// echo print_r($data,true);
			}
		}
		
		$data['blogs'] = [];
		$blogs = scandir('./application/controllers/blogs/Technology');
		foreach($blogs as $index => $blog_file) {
			if ($index > 1) {
				$data['blogs'][$index] = parse_ini_file('blogs/Technology/' . $blog_file);
				// echo print_r($data,true);
			}
		}
		$this->load->view('header', $data);
		$this->load->view('blogs', $data);	
		$this->load->view('footer');
		
	}

	public function gethome() {
		$this->load->view('home');
	}
}
