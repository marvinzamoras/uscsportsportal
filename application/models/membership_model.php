<?php

class Membership_model extends CI_Model{

	function validate(){
		$stud_id =$this->input->post('stud_id');		
		$this->db->where('stud_id',$stud_id);
		$this->db->where('password',md5($this->input->post('password')));
		$query = $this->db->get('user'); 
		if($query->num_rows() == 1){
			return true;
		}
	}

	function create_member(){

		$stud_id = $this->input->post('stud_id');

		$new_member_insert_data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'contact_no' => $this->input->post('contact_no'),
			'email_address' => $this->input->post('email_address'),
			'home_address' => $this->input->post('home_address'),
			'school' => $this->input->post('school'),
			'stud_id' => $this->input->post('stud_id'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$insert = $this->db->insert('user',$new_member_insert_data);
		return $insert;
	}

	function check_if_deleted(){
		$id = $this->input->post('stud_id');		
		$query = $this->db->get_where('user', array('stud_id' => $id));
		if ($query->num_rows() > 0){
		foreach ($query->result() as $row)
			{
   				   $status = $row->status;
			}
	    
			if("Restore" == $status){
				return TRUE; 
		    }

	    }
	}


	function check_if_username_exists($username){

		$this->db->where('username',$username);
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function check_if_username_exists_profile($username){

		$this->db->where('username',$username);
		$this->db->where('stud_id !=',$this->session->userdata['stud_id']);
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function check_if_email_exists($email){

		$this->db->where('email_address',$email);
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function check_if_email_exists_profile($email){

		$this->db->where('email_address',$email);
		$this->db->where('stud_id !=',$this->session->userdata['stud_id']);
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function check_if_id_number_exists($id){

		$this->db->where('stud_id',$id);
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function check_if_admin(){
		$this->db->where('stud_id',$this->session->userdata['stud_id']);
		$this->db->where('user_type','admin');
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return TRUE;
		} else{
			return FALSE;
		}
	}

	function retrieve_user($id){
		 $query =  $this->db->get_where('user',array('stud_id'=> $id));
		 return $query->row_array();
	}
	
	public function get_dropdown_list()
		{
			$this->db->from('school');
			$this->db->order_by('school_name');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) 
				{
					$return[$row['school_id']] = $row['school_name'];
				}
			}

			return $return;
		}

}