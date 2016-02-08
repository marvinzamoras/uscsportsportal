<?php
class Ranking_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
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
	        return $this->db->count_all("announcements");
	    }

	    public function fetch_school($limit, $start) {
	        $this->db->limit($limit, $start);
	        
	        $query = $this->db->get("school");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   public function delete_announcement($id)
		{
			 $this->db->delete('announcements', array('ann_id' => $id));
			 redirect(base_url().'announcement_admin/');
		}

		public function set_announcement()
		{ 
		    $this->load->helper('url');
		    $slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		    $date =date('Y-m-d H:i:s');
		    $data = array(
		        'ann_title' => $this->input->post('ann_title'),
		        'slug' => $slug,
		        'admin_id' =>$this->session->userdata['stud_id'],
		        'ann_pub'=>$date,
		        'ann_content' => $this->input->post('ann_content')
		    );
		    return $this->db->insert('announcements', $data);
		}

		public function update_announcement($slug = NULL) {
		    $data = array(
		        'ann_title' => $this->input->post('ann_title'),
		        'ann_content' => $this->input->post('ann_content')
		    );

		    $this->db->where('slug', $slug);
		    $this->db->update('announcements', $data);
		}
	    
	   function get_author($id){
		 $query = $this->db->get_where('user', array('stud_id' => $id));
		 return $query->row_array();
	}

	public function get_rank() {
		  	
				$this->db->from("school");
				$this->db->order_by("points", "desc"); 
				$query=$this->db->get();
				 return $query->result_array();

		}
	    

}