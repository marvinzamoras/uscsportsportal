<?php
	class Profile_model extends CI_Model{

		public function __construct()
        {
                $this->load->database();
        }

        public function get_school($id){
        	$this->db->select('school_name');
		    $this->db->from('school');
		    $this->db->join('user', 'user.school = school.school_id');
		    $this->db->where('user.user_id',$id);

		    $result = $this->db->get();
		    return $result;
        }
	}
?>