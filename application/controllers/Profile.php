<?php
class Profile extends MY_Controller{
	public function __construct() {
	    parent::__construct();
	    $this->load->model('membership_model');
	    $this->load->model('profile_model');
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
	
    public function edit($stud_id){

	         $data['profile_item'] = $this->membership_model->retrieve_user($stud_id);
	         if (empty($data['profile_item'])){
	                show_404();
	         }
	         $data['title'] = "Edit Profile";
	         $data['school_list'] = $this->membership_model->get_dropdown_list();
	         $this->load->view('includes/header', $data);
	         $this->load->view('includes/header_content', $data);
	         //validation rules
					$this->form_validation->set_rules('fname',' First Name','trim|required');
					$this->form_validation->set_rules('lname','Last Name','trim|required');
					$this->form_validation->set_rules('email_address','Email Address','trim|required|valid_email|callback_check_if_email_exists_profile');
					$this->form_validation->set_rules('contact_no','Contact No','trim|required|min_length[11]|max_length[11]|numeric');
					$this->form_validation->set_rules('home_address','Home Address','trim|required');
					$this->form_validation->set_rules('school','School','trim|required|numeric');
					$this->form_validation->set_rules('username','Username','trim|required|callback_check_if_username_exists_profile');
					$this->form_validation->set_rules('password','Password','trim|min_length[8]|max_length[8]');
					$this->form_validation->set_rules('password_confirm','Password Confirmation','trim|max_length[8]|matches[password]');
	                $this->load->helper('url');
	                if($this->form_validation->run() === FALSE)
	                {
	                    $this->load->view('edit_profile', $data);
	                    $this->load->view('includes/footer');
	                }
	                else{

			           	if($this->input->post('submit')){
			              	
			           		if(empty($this->input->post('password'))){
				                $data = array(
				                'fname' => $this->input->post('fname'),
				                'lname' => $this->input->post('lname'),
				                'email_address'=>$this->input->post('email_address'),
				                'contact_no'=>$this->input->post('contact_no'),
				                'home_address'=>$this->input->post('home_address'),
				                'school'=>$this->input->post('school'),
				                'username'=>$this->input->post('username')
			            	);
			            }
			            else{
			               	$data = array(
			                'fname' => $this->input->post('fname'),
			                'lname' => $this->input->post('lname'),
			                'email_address'=>$this->input->post('email_address'),
			                'contact_no'=>$this->input->post('contact_no'),
			                'home_address'=>$this->input->post('home_address'),
			                'school'=>$this->input->post('school'),
			                'username'=>$this->input->post('username'),
			                'password' => md5($this->input->post('password'))
			                );
			            }

			                $this->db->where('stud_id', $stud_id);
			                $this->db->update('user', $data);
			                redirect(base_url().'profile/view/');
			            } else{
			                $data['profile_item'] = $this->membership_model->retrieve_user($stud_id);
			                $this->load->view('edit_profile', $data);
			                $this->load->view('includes/footer');
			            }
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
	function check_if_username_exists_profile($requested_username){
		$this->load->model('membership_model');
		$username_available = $this->membership_model->check_if_username_exists_profile($requested_username);
		if($username_available){
			return TRUE;
		} else{
			return FALSE;
		}
	}
	
}