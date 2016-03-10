<?php
class Game_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_game($game_id = FALSE)
		{
		        if ($game_id === FALSE)
		        {
		                $query = $this->db->get('game');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('game', array('game_id' => $game_id));
		        return $query->row_array();
		}
		

		public function record_count() {
	        return $this->db->count_all("game");
	    }

	    public function fetch_team($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get("game");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   
		public function set_game()
		{ 
		    $this->load->helper('url');
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');
		    $data = array(
		        'game_name' => $this->input->post('game_name'),
                'game_desc' => $this->input->post('game_desc')
		    );
		    return $this->db->insert('game', $data);
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

		function check_unique_name($name, $id)
		{
	        $this->db->where('game_name', $name);

	        if($id) {
	            $this->db->where_not_in('game_id', $id);
	        }
        return $this->db->get('game')->num_rows();
    	}
		

}