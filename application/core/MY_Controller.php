<?php
class MY_Controller extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->model('membership_model');
    }

   	

   	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('login');
			die();
		}
		
	}
}