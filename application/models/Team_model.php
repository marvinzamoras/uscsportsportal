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
		                $query = $this->db->get('teams');
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
                'school_id' => $this->input->post('school_id')
               
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
					$return[$row['school_name']] = $row['school_name'];
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
					$return[$row['game_name']] = $row['game_name'];
				}
			}

			return $return;
		}

		
		

}