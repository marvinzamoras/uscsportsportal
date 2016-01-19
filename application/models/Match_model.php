<?php
class Match_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_match($game_name)
		{
		       

		        $this->db->select('*');
                 $this->db->from('matchup');
                 $this->db->where('game', $game_name); 
                 $query = $this->db->get();
                 $result = $query->result_array();

                 return $result;
		}
		
		 public function get_game($game_id)
		{

                 $this->db->select('game_name');
                 $this->db->from('game');
                 $this->db->where('game_id', $game_id); 
                 $query = $this->db->get();

                 return $query;


		}
		//for all match ups
		public function record_count($game_name) {
			$this->db->get_where('matchup', array('game' => $game_name));
	        return $this->db->count_all_results();
	    }
	    //for finished game match
	    public function count_finished($game_name) {
	        $this->db->get_where('matchup', array('game' => $game_name && 'teamres1' <> "Default"));
			return $this->db->count_all_results();    
	    }

	    //for upcoming matches
	    public function count_upcoming($game_name) {
	        $this->db->query('SELECT * From "matchup" where game => $game_name && teamres1 = "Default" ');
			return $this->db->count_all_results();    
	    }

	    public function fetch_match($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get("matchup");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   
		public function set_match()
		{ 
		    $this->load->helper('url');
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');
		    $data = array(
		        'team1' => $this->input->post('team1'),
                'team2' => $this->input->post('team2'),
                'game'=>$this->input->post('game'),
                'school1' => $this->input->post('school1'),
                'school2' => $this->input->post('school2'),
                'time' => $this->input->post('time'),
                'date' => $this->input->post('date'),
                'team1_score'=>$this->input->post('team1_score'),
                'team2_score' => $this->input->post('team2_score'),
                'team1_res' => $this->input->post('team1_res'),
                'team2_res' => $this->input->post('team2_res'),
                'category'=>$this->input->post('category')
               
		    );
		    return $this->db->insert('match', $data);
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

		public function get_teams()
		{
			$this->db->from('teams');
			$this->db->order_by('team_name');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) 
				{
					$return[$row['team_name']] = $row['team_name'];
				}
			}

			return $return;
		}

		

		
		

}