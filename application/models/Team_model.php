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
                'school_id' => $this->input->post('school_id'),
                'wins' => $this->input->post('wins'),
                'rank' => $this->input->post('rank'),
                'loss' => $this->input->post('loss')
		    );
		    return $this->db->insert('teams', $data);
		}

		

}