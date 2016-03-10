<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_news($slug = FALSE)
		{
		        if ($slug === FALSE)
		        {
		                $query = $this->db->get('news');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('news', array('slug' => $slug));
		        return $query->row_array();
		}

		public function record_count() {
	        return $this->db->count_all("news");
	    }

	    public function fetch_news($limit, $start) {
	        $this->db->limit($limit, $start);
	        $this->db->order_by('news_pub','DESC');
	        $query = $this->db->get("news");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

	   public function delete_news($id)
		{
			 $this->db->delete('news', array('news_id' => $id));
			 redirect(base_url().'news_admin/');
		}

		public function set_news()
		{ 
		    $this->load->helper('url');
		    $slug = url_title($this->input->post('news_title'), 'dash', TRUE);
		    $date =date('Y-m-d H:i:s');
		    $data = array(
		        'news_title' => $this->input->post('news_title'),
		        'slug' => $slug,
		        'admin_id' =>$this->session->userdata['stud_id'],
		        'news_pub'=>$date,
		        'news_content' => $this->input->post('news_content')
		    );
		    return $this->db->insert('news', $data);
		   

		}

		public function update_news($id, $title, $content) {
		    $data = array(
		        'news_title' => $title,
		        'news_content' => $content
		    );

		    $this->db->where('news_id', $id);
		    $this->db->update('news', $data);
		}

		 function get_author($id){
		 $query = $this->db->get_where('user', array('stud_id' => $id));
		 return $query->row_array();
	}

	function check_unique_title($title, $id)
		{
	        $this->db->where('news_title', $title);

	        if($id) {
	            $this->db->where_not_in('news_id', $id);
	        }
        return $this->db->get('news')->num_rows();
    	}
}