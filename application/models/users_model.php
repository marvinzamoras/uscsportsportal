<?php
class Users_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_users($id = FALSE)
		{
		        if ($id === FALSE)
		        {

		        		$this->db->select("*");

		        		$this->db->from('user');
		        		$this->db->where('user_type','member');
		        		$this->db->join('school', 'school.school_id = user.school');
		                $query = $this->db->get();
		                return $query->result_array();
		        }


		        		$this->db->select("*");
		        		$this->db->from('user');
		        		$this->db->where('user_id',$id);
		        		$this->db->where('user_type','member');
		        		$this->db->join('school', 'school.school_id = user.school');
		        $query =  $this->db->get();
		        return $query->row_array();
		}

		public function record_count() {
	        return $this->db->count_all("user");
	    }

	    public function fetch_users($limit, $start) {
	        $this->db->limit($limit, $start);
	        $this->db->order_by('stud_id','DESC');
	        $query = $this->db->get("user");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   
			public function delete_user($id,$status)
		{
			if( "Restore" == $status){
			$data = array(
		        'status' => "Delete"
		        
		        
		    );
			}else{
			$data = array(
		        'status' => "Restore"	
		        );
			}
			 $this->db->where('user_id',$id);
		    $this->db->update('user',$data);
			
			 redirect(base_url().'users_admin');
		}
		

		
}