<?php
class Match_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
//para view all

        public function get_match($game_id)
		{


		   $this->db->SELECT('*');
		    $this->db->FROM('matchup');
		    $this->db->WHERE('game',$game_id);
		    $this->db->JOIN('category', 'category.cat_id = matchup.category');

		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            return $result->result_array();
				 
				}else return False;


		}
//edit match
		public function view_match($id)
		{


		   	$this->db->SELECT('*');
		    $this->db->FROM('matchup');
		    $this->db->JOIN('category', 'category.cat_id = matchup.category');
		    $this->db->JOIN('teams', 'teams.team_id = matchup.team1');
		    $this->db->JOIN('school', 'school.school_id = teams.FKschool_id');
		    $this->db->JOIN('game', 'game.game_id = matchup.game');
		    $this->db->WHERE('match_id',$id);


		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            return $result->row();
				 
				}else return False;


		}	
//edit match
		public function view_team1($id)
		{
		     if ($id === FALSE)
		        {
		                $query = $this->db->get('teams');
		                return $query->result_array();
		        }

		    $this->db->select('*');
		    $this->db->from('matchup');
		    $this->db->join('teams', 'matchup.team1 = teams.team_id');
		    $this->db->where('matchup.match_id', $id);
		    
		    $query = $this->db->get();
		    return $query->row_array();
		}

		//edit match
		public function view_team2($id)
		{
		     if ($id === FALSE)
		        {
		                $query = $this->db->get('teams');
		                return $query->result_array();
		        }

		    $this->db->select('*');
		    $this->db->from('matchup');
		    $this->db->join('teams', 'matchup.team2 = teams.team_id');
		    $this->db->where('matchup.match_id', $id);
		    
		    $query = $this->db->get();
		    return $query->row_array();
		}

		//edit match

		public function view_school1($id)
		{
		     if ($id === FALSE)
		        {
		                $query = $this->db->get('school');
		                return $query->result_array();
		        }

		    $this->db->select('*');
		    $this->db->from('matchup');
		    $this->db->join('teams', 'matchup.team1 = teams.team_id');
		    $this->db->join('school', 'school.school_id = teams.FKschool_id');
		    $this->db->where('matchup.match_id', $id);
		    
		    $query = $this->db->get();
		    return $query->row_array();
		}



		//edit match
		public function view_school2($id)
		{
		     if ($id === FALSE)
		        {
		                $query = $this->db->get('school');
		                return $query->result_array();
		        }

		    $this->db->select('*');
		    $this->db->from('matchup');
		    $this->db->join('teams', 'matchup.team2 = teams.team_id');
		    $this->db->join('school', 'school.school_id = teams.FKschool_id');
		    $this->db->where('matchup.match_id', $id);
		    
		    $query = $this->db->get();
		    return $query->row_array();
		}

//para view all 

		public function team1($match)
		{

			if ($match==False){

				return False;
			}
			elseif(sizeof($match)>0)
		     {
		     	for($i=0; $i< sizeof($match); $i++)

			{	
				 $this->db->select('team_name');
				 $this->db->from('teams');
				 $this->db->where('team_id',$match[$i]['team1']);
				 $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $name = $row->team_name;
	            }
				 
				}

				$team1[$i]=$name;
				
	           

	        }

	         return $team1;
	    }
			
		}

//para view all 

		public function team2($match)
		{
			if ($match==False){

				return False;
			}
			elseif(sizeof($match)>0){
			 for($i=0; $i< sizeof($match); $i++)

			{	
				 $this->db->select('team_name');
				 $this->db->from('teams');
				 $this->db->where('team_id',$match[$i]['team2']);
				 $result = $this->db->get();
				  if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $name = $row->team_name;
	            }
				 
				}else{
					return NULL;
				}
				$team2[$i]=$name;
				}
				 return $team2;
				}
	           


			
		}
//para view all 

		public function school1($match)
		{
			if ($match==False){

				return False;
			}
			elseif(sizeof($match)>0)
				{
					for($i=0; $i< sizeof($match); $i++)

			{	
				 $this->db->select('FKschool_id');
				 $this->db->from('teams');
				 $this->db->where('team_id',$match[$i]['team1']);
				 $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $id = $row->FKschool_id;
	            }
				 
				}else{
					return NULL;
				}

				 $this->db->select('school_name');
				 $this->db->from('school');
				 $this->db->where('school_id',$id);
				 $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $name = $row->school_name;
	            }
				 
				} else{
					return NULL;
				}

				 $school1[$i]=$name;


				}
				return $school1;

	           }


	            

			
		}

//para view all

		public function school2($match)
		{
			if ($match==False){

				return False;
			}
			elseif(sizeof($match)>0)
				{
					for($i=0; $i< sizeof($match); $i++)

			{	
				 $this->db->select('FKschool_id');
				 $this->db->from('teams');
				 $this->db->where('team_id',$match[$i]['team2']);
				 $result = $this->db->get();
				if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $id = $row->FKschool_id;
	            }
				 
				}else{
					return NULL;
				}

				 $this->db->select('school_name');
				 $this->db->from('school');
				 $this->db->where('school_id',$id);
				 $result = $this->db->get();
				if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $name = $row->school_name;
	            }
				 
				}else{
					return NULL;
				}

				$school2[$i]=$name;
				}
				 return $school2;

	           }


	           

			
		}


		

		    

//para view all

		public function get_category(){
		
			$query = $this->db->get('category');
		    return $query->result_array();

		}



		public function points($res1,$team1,$team2){
		

				 $this->db->select('*');
				 $this->db->from('teams');
				 $this->db->where('team_id',$team1);
				 $result = $this->db->get();
					if ($result->num_rows() > 0) {
	            	foreach ($result->result() as $row) {
	                $wins1 = $row->wins;
	                $loss1 = $row->loss;
	            }
				 
				}


				 $this->db->select('*');
				 $this->db->from('teams');
				 $this->db->where('team_id',$team2);
				 $result = $this->db->get();
					if ($result->num_rows() > 0) {
	            	foreach ($result->result() as $row) {
	                $wins2 = $row->wins;
	                $loss2 = $row->loss;
	            }
				 
				}


			if($res1 == 'W'){
				    $wins1= $wins1 +1;
				    $loss2=$loss2 +1;
					$data = array(
               		'wins' => $wins1);
					$this->db->where('team_id', $team1);
                 	$this->db->update('teams', $data);

                 	$data = array(
               		'loss' => $loss2);
					$this->db->where('team_id', $team2);
                 	$this->db->update('teams', $data);




	            }else{

	            	$wins2 = $wins2 +1;
	            	$loss1 =$loss1 +1;
					$data = array(
               		'wins' => $wins2);
					$this->db->where('team_id', $team2);
                 	$this->db->update('teams', $data);
                 	$data = array(
               		'loss' => $loss1);
					$this->db->where('team_id', $team1);
                 	$this->db->update('teams', $data);
	            }

		}
		
		

		
		//for all match ups
		public function record_count($game_id) {
			$this->db->get_where('matchup', array('game' => $game_id));
	        return $this->db->count_all_results();
	    }
	    //for finished game match
	    public function count_finished($game_id) {
	        $this->db->get_where('matchup', array('game' => $game_id && 'teamres1' <> "Default"));
			return $this->db->count_all_results();    
	    }

	    //for upcoming matches
	    public function count_upcoming($game_id) {
	        $this->db->query('SELECT * From "matchup" where game => $game_id && teamres1 = "Default" ');
			return $this->db->count_all_results();    
	    }

	    public function fetch_match($limit, $start,$game_id) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get_where('matchup', array('game' => $game_id));

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
                'time' => $this->input->post('time'),
                'date' => $this->input->post('date'),
                'team1_score'=>$this->input->post('team1_score'),
                'team2_score' => $this->input->post('team2_score'),
                'team1_res' => $this->input->post('team1_res'),
                'team2_res' => $this->input->post('team2_res'),
                'category'=>$this->input->post('category')
               
		    );
		     return $this->db->insert('matchup', $data);

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

		public function get_teams($game)
		{
			$this->db->SELECT('*');
		    $this->db->FROM('teams');
		    $array = array( 'game_cat' => $game);
			$this->db->WHERE($array);
		    //$this->db->JOIN('category', 'category.cat_id = matchup.category');

		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            return $result->result_array();
				 
				}else return False;
		}


//para edit ang naay view na tags
		

		

		

		
		
		
    } 

		
		

