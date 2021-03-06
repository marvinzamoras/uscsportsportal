<?php
class Team_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_team($team_id = FALSE)
		{
		        if ($team_id === FALSE)
		        {
		        		$this->db->select("*");
						$this->db->from('teams');
						$this->db->join('school', 'school.school_id = teams.FKschool_id');
						$this->db->join('game', 'game.game_id = teams.game_cat');
						$this->db->join('category', 'category.cat_id = teams.team_cat');
						$query = $this->db->get();
		                //$query = $this->db->get('teams');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('teams', array('team_id' => $team_id));
		        return $query->row_array();
		}
		public function get_school($school_id = FALSE)
		{
		        if ($school_id === FALSE)
		        {
		                $query = $this->db->get('school');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('school', array('school_id' => $school_id));
		        return $query->row_array();
		}

		public function record_count() {
	        return $this->db->count_all("teams");
	    }

	    public function fetch_team($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get("teams");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   
		public function set_team()
		{ 
		    $this->load->helper('url');
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');
		    $data = array(
		        'team_name' => $this->input->post('team_name'),
                'team_cat' => $this->input->post('team_cat'),
                'game_cat'=>$this->input->post('game_cat'),
                'FKschool_id' => $this->input->post('FKschool_id')
               
		    );
		    return $this->db->insert('teams', $data);
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

		public function get_game()
		{
			$this->db->from('game');
			$this->db->order_by('game_name');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) 
				{
					$return[$row['game_id']] = $row['game_name'];
				}
			}

			return $return;
		}
		public function get_team_category()
		{
			$this->db->from('category');
			$this->db->order_by('cat_name');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) 
				{
					$return[$row['cat_id']] = $row['cat_name'];
				}
			}

			return $return;
		}

		
		public function display_team(){
			$query1 = $this->db->get('game')->result();
			$query2 = $this->db->get('teams')->result();
			$query3 = $this->db->get('school')->result();
			$query4 = $this->db->get('category')->result();
			return array('games'=>$query1, 'team'=>$query2, 'school'=>$query3,'category'=>$query4);
		}


		public function view_team($school_id){
		        
		        		$this->db->select("*");
						$this->db->from('teams');
						$this->db->where('FKschool_id',$school_id);
						$this->db->join('category', 'category.cat_id = teams.team_cat');
						
						$query = $this->db->get()->result();
						$query1 = $this->db->get('game')->result();
						$query4 = $this->db->get('category')->result();
						$output = $this->db->query("SELECT school_name FROM school WHERE school_id='$school_id'")->row()->school_name;
						$output2 = $this->db->query("SELECT school_desc FROM school WHERE school_id='$school_id'")->row()->school_desc;
						$output3 = $this->db->query("SELECT school_logo FROM school WHERE school_id='$school_id'")->row()->school_logo;


		                //$query = $this->db->get('teams');
		                //return $query->result_array();


		        	//return array('team'=>$query,'games'=>$query1,'category'=>$query4,'school'=>$output);

						$output2 = $this->db->query("SELECT school_desc FROM school WHERE school_id='$school_id'")->row()->school_desc;
						$output3 = $this->db->query("SELECT school_logo FROM school WHERE school_id='$school_id'")->row()->school_logo;

		                //$query = $this->db->get('teams');
		                //return $query->result_array();
		        	return array('team'=>$query,'games'=>$query1,'category'=>$query4,'school'=>$output,'school_desc'=>$output2,'school_logo'=>$output3);



		        
		}

		function check_unique_name($name, $id)
		{
	        $this->db->where('team_name', $name);

	        if($id) {
	            $this->db->where_not_in('team_id', $id);
	        }
        return $this->db->get('teams')->num_rows();
    	}

}