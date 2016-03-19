<?php
class player_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_player($player_id = FALSE)
		{
		        if ($player_id === FALSE)
		        {
		                $this->db->select("*");
						$this->db->from('player');
						$this->db->join('school', 'school.school_id = player.player_school');
						$this->db->join('teams', 'teams.team_id = player.player_team');
						
						$query = $this->db->get();
		                //$query = $this->db->get('teams');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('player', array('player_id' => $player_id));
		        return $query->row_array();
		}

			public function record_count() {
	        return $this->db->count_all("player");
	    }

	    public function fetch_player($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get("player");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   
		public function set_player()
		{ 
		    $this->load->helper('url');
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');
		    $data = array(
		        'player_name' => $this->input->post('player_name'),
                'player_bio'=> $this->input->post('player_bio'),
                'player_team'=> $this->input->post('player_team'),
                'player_img'=> $this->input->post('player_img'),
                'player_school'=> $this->input->post('player_school')
               
		    );
		    return $this->db->insert('player', $data);
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

		public function delete_player($id)
		{
			$this->db->delete('player', array('player_id' => $id));
			 redirect(base_url().'player_admin/');
		}

		public function get_team()
		{
			$this->db->from('teams');
			$this->db->order_by('team_name');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0) {
				foreach($result->result_array() as $row) 
				{
					$return[$row['team_id']] = $row['team_name'];
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


		public function view_player($team_id){
		        
		        		$this->db->select("*");
						$this->db->from('player');
						$this->db->where('player_team',$team_id);
						$query = $this->db->get()->result();
						$output = $this->db->query("SELECT team_name FROM teams WHERE team_id='$team_id'")->row()->team_name;
						

		                
		        	return array('player'=>$query, 'team'=>$output);



		        
		}

		function check_unique_name($name, $id)
		{
	        $this->db->where('team_name', $name);

	        if($id) {
	            $this->db->where_not_in('team_id', $id);
	        }
        return $this->db->get('teams')->num_rows();
    	}

    	function retrieve_player($id)
    	{
    		$query =  $this->db->get_where('player',array('player_id'=> $id));
		 	return $query->row_array();
    	}

}