<?php

class Login extends MY_Controller{

	public function index($page = 'login'){
		$this->load->library('form_validation');
		$data['title'] = ucfirst($page);
		$this->load->view('includes/header',$data);
		$this->load->view('login_form');
		$this->load->view('includes/footer');
	}

 	function signup($page = 'signup'){
 		$data['title'] = ucfirst($page);
		$this->load->view('includes/header',$data);
		$this->load->view('signup_form');
		$this->load->view('includes/footer');
	}

	function validate_credentials(){
		
		$this->load->library('form_validation');
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		$status = $this->membership_model->check_if_deleted();
		$data['title'] = "Login";
		
		if($query){
			if($status){

				$data['account_deleted'] = 'Your account has been removed.<br>Please contact administration.';
				$this->load->view('includes/header',$data);
				$this->load->view('login_form',$data);
				$this->load->view('includes/footer',$data);
			}else{
			$data = array(
				'stud_id' => $this->input->post('stud_id'),
				'time' => date('Y-m-d H:i:s'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			
			redirect('site/home');}
		 }else{
			
			$data['account_incorrect'] = 'Incorrect ID or Password!';
				$this->load->view('includes/header',$data);
				$this->load->view('login_form',$data);
				$this->load->view('includes/footer');
		}
	}

	function create_member(){
		$data['title'] = ucfirst('signup');
		$this->load->library('form_validation');

		//validation rules
		$this->form_validation->set_rules('fname',' First Name','trim|required');
		$this->form_validation->set_rules('lname','Last Name','trim|required');
		$this->form_validation->set_rules('email_address','Email Address','trim|required|valid_email|callback_check_if_email_exists');
		$this->form_validation->set_rules('contact_no','Contact No','trim|required|min_length[11]|max_length[11]');
		$this->form_validation->set_rules('home_address','Home Address','trim|required');
		$this->form_validation->set_rules('school','School','trim|required');
		$this->form_validation->set_rules('stud_id','ID Number','trim|min_length[8]|max_length[8]|required|callback_check_if_id_number_exists');
		$this->form_validation->set_rules('username','Username','trim|required|callback_check_if_username_exists');
		$this->form_validation->set_rules('password','Password','trim|min_length[8]|max_length[32]|required');
		$this->form_validation->set_rules('password_confirm','Password Confirmation','trim|max_length[32]|required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('includes/header',$data);
			$this->load->view('signup_form',$data);
			$this->load->view('includes/footer',$data);
		} else{
			$this->load->model('membership_model');

			if($query = $this->membership_model->create_member()){
				$data['account_created'] = 'Your account has been created.<br>You may now login.';

				$this->load->view('includes/header',$data);
				$this->load->view('login_form',$data);
				$this->load->view('includes/footer',$data);
			} else{
				$this->load->view('includes/header',$data);
				$this->load->view('signup_form',$data);
				$this->load->view('includes/footer',$data);
			}
		}
	}

	function check_if_username_exists($requested_username){

		$this->load->model('membership_model');

		$username_available = $this->membership_model->check_if_username_exists($requested_username);

		if($username_available){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	function check_if_email_exists($requested_email){

		$this->load->model('membership_model');

		$email_available = $this->membership_model->check_if_email_exists($requested_email);

		if($email_available){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	function check_if_email_exists_profile($requested_email){

		$this->load->model('membership_model');

		$email_available = $this->membership_model->check_if_email_exists_profile($requested_email);

		if($email_available){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	function check_if_id_number_exists($requested_id){

		$this->load->model('membership_model');

		$id_available = $this->membership_model->check_if_id_number_exists($requested_id);

		if($id_available){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	function logout(){
    	$this->session->sess_destroy();
    	$this->index();
	}

	
}