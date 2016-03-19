<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->library("pagination");
                //$this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->is_logged_in();
        }

	public function index()
	{
		$data['title'] = 'Admin Panel';
		$data['news'] = $this->news_model->get_news();
		$this->load->view('includes/header',$data);
		$this->load->view('admin/header_content',$data);
		//$this->load->view('admin/main_content',$data);
		$this->load->view('includes/footer');
	}

	 
}
