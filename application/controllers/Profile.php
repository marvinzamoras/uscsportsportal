<?php

class Profile extends MY_Controller{

	public function __construct() {
	    parent::__construct();
	    $this->load->model('membership_model');
	    $this->load->library("pagination");
	    $this->load->helper('url_helper');
	    $this->load->library('form_validation');
		$this->is_logged_in();


	}

	public function view(){
		$author = $this->session->userdata['stud_id'];
		$data['user_item'] = $this->membership_model->retrieve_user($author);
		$data['title'] = 'My Profile';
		 $this->load->view('includes/header', $data);
         $this->load->view('includes/header_content', $data);
         $this->load->view('profile', $data);
         $this->load->view('includes/footer');
	}

	public function edit(){
		$author = $this->session->userdata['stud_id'];
		$data['user_item'] = $this->membership_model->retrieve_user($author);
		$data['title'] = 'My Profile';
		 $this->load->view('includes/header', $data);
         $this->load->view('includes/header_content', $data);
         $this->load->view('edit_profile', $data);
         $this->load->view('includes/footer');
	}
}