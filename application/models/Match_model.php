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
		    $this->db->order_by('date','desc');
		    $this->db->order_by('time','desc');
		    $this->db->JOIN('category', 'category.cat_id = matchup.category');
			$this->db->WHERE('game',$game_id);
		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            $match= $result->result_array();
	           

	        $count = count($match);

	        for($i=0;$i<$count;$i++){

	        	$this->db->SELECT('*');
		    	$this->db->FROM('teams');
		    	$this->db->WHERE('team_id',$match[$i]['team1']);
		 		$result = $this->db->get();
		  		$match[$i]['t1']=$result->row_array();

		  		$this->db->SELECT('*');
		    	$this->db->FROM('school');
		    	$this->db->WHERE('school_id',$match[$i]['t1']['FKschool_id']);
		 		$result = $this->db->get();
		  		$match[$i]['s1']=$result->row_array();

		  		$this->db->SELECT('*');
		    	$this->db->FROM('teams');
		    	$this->db->WHERE('team_id',$match[$i]['team2']);
		 		$result = $this->db->get();
		  		$match[$i]['t2']=$result->row_array();

		  		$this->db->SELECT('*');
		    	$this->db->FROM('school');
		    	$this->db->WHERE('school_id',$match[$i]['t2']['FKschool_id']);
		 		$result = $this->db->get();
		  		$match[$i]['s2']=$result->row_array();




	        	}
	        	return $match; 

			}else {return False;}


		}
//edit match
		public function view_match($match_id)
		{


		   	$this->db->SELECT('*');
		    $this->db->FROM('matchup'); 
		    $this->db->JOIN('category', 'category.cat_id = matchup.category');
		    $this->db->JOIN('game', 'game_id = matchup.game');
			$this->db->WHERE('match_id', $match_id);
		    
		    	$result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            $match= $result->row_array();
	           

	        	$this->db->SELECT('*');
		    	$this->db->FROM('teams');
		    	$this->db->WHERE('team_id',$match['team1']);
		 		$result = $this->db->get();
		  		$match['team1']=$result->row_array();

		  		$this->db->SELECT('*');
		    	$this->db->FROM('school');
		    	$this->db->WHERE('school_id',$match['team1']['FKschool_id']);
		 		$result = $this->db->get();
		  		$match['s1']=$result->row_array();

		  		$this->db->SELECT('*');
		    	$this->db->FROM('teams');
		    	$this->db->WHERE('team_id',$match['team2']);
		 		$result = $this->db->get();
		  		$match['team2']=$result->row_array();

		  		$this->db->SELECT('*');
		    	$this->db->FROM('school');
		    	$this->db->WHERE('school_id',$match['team2']['FKschool_id']);
		 		$result = $this->db->get();
		  		$match['s2']=$result->row_array();




	        	
	        	return $match; }

			else {return False;}
}


//edit match
		

		

		    

//para view all

		public function get_category(){
		
			$query = $this->db->get('category');
		    return $query->result_array();

		}


//para update

		public function points($res,$team1,$team2,$m){
				
				 $this->db->select('*');
				 $this->db->from('matchup');
				 $this->db->where('match_id',$m);
				 $result = $this->db->get();
					if ($result->num_rows() > 0) {
	            	foreach ($result->result() as $row) {
	                $res1 = $row->team1_res;
	                $res2 = $row->team2_res;
	            }
	            }
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

		if($res1=="Default"){
			if($res == 'team1'){
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
		}else{

			if($res == 'team1'&& $res1 == 'Loss'){

					$wins1= $wins1 +1;
					$wins2= $wins2 -1;
					$loss1= $loss1 -1;
				    $loss2= $loss2 +1;
					$data = array(
               		'wins' => $wins1);
					$this->db->where('team_id', $team1);
                 	$this->db->update('teams', $data);

                 	$data = array(
               		'loss' => $loss2);
					$this->db->where('team_id', $team2);
                 	$this->db->update('teams', $data);

			}elseif($res!= 'team1'&& $res1 == 'Win'){

				    $wins1= $wins1 -1;
					$wins2= $wins2 +1;
					$loss1= $loss1 +1;
				    $loss2= $loss2 -1;
					$data = array(
               		'wins' => $wins1);
					$this->db->where('team_id', $team1);
                 	$this->db->update('teams', $data);

                 	$data = array(
               		'loss' => $loss2);
					$this->db->where('team_id', $team2);
                 	$this->db->update('teams', $data);
			}
		}
	}

		



//para update		
		public function result($res,$match_id)
		{

			if ($res =="team1")
			

			{	
				  $data = array(
                'team1_res' => "Win",
                'team2_res' => "Loss"
                
               );


	         
	    }else{

	    	{	
				  $data = array(
                'team1_res' => "Loss",
                'team2_res' => "Win"
                
            );


	    }
                $this->db->where('match_id', $match_id);
                $this->db->update('matchup', $data);
	}
	
	}
		//for all match ups
		
	   
		public function set_match($t1,$t2)
		{ 
		    $this->load->helper('url');
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');
		    $data = array(
		        'team1' => $t1,
                'team2' => $t2,
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

		public function edit_match($m,$t1,$t2)
		{ 
		    $this->load->helper('url');
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');
		    $data = array(
		        'team1' => $t1,
                'team2' => $t2,
                //'game'=>$this->input->post('game'),
                'time' => $this->input->post('time'),
                'date' => $this->input->post('date'),
               // 'team1_score'=>$this->input->post('team1_score'),
                //'team2_score' => $this->input->post('team2_score'),
                //'team1_res' => $this->input->post('team1_res'),
                //'team2_res' => $this->input->post('team2_res'),
                //'category'=>$this->input->post('category')
               
		    );
		     $this->db->where('match_id', $m);
			return $this->db->update('matchup', $data); 


		}

		public function cancel_match($m,$stat)
		{ 
		    
		    //$slug = url_title($this->input->post('ann_title'), 'dash', TRUE);
		   // $date =date('Y-m-d H:i:s');

			 

		    if($stat == "Official"){
		    $data = array(
		        'status' => "Cancelled");
			}else{

				 $data = array(
		        'status' => "Official");
			}
                
		     $this->db->where('match_id', $m);
			 $this->db->update('matchup', $data); 

			  


		}
		

		public function men($game)
		{
			$this->db->SELECT('*');
		    $this->db->FROM('teams');
			$this->db->WHERE('game_cat',$game);
			$this->db->WHERE('team_cat', '1');
		    //$this->db->JOIN('category', 'category.cat_id = matchup.category');

		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            return $result->result_array();
				 
				}else {return False;
		}
	}

		public function women($game)
		{
			$this->db->SELECT('*');
		    $this->db->FROM('teams');
		  $this->db->WHERE('game_cat',$game);
			$this->db->WHERE('team_cat', '2');
		    //$this->db->JOIN('category', 'category.cat_id = matchup.category');

		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            return $result->result_array();
				 
				}else {return False;
		}
	}

		public function mixed($game)
		{
			$this->db->SELECT('*');
		    $this->db->FROM('teams');
		   $this->db->WHERE('game_cat',$game);
			$this->db->WHERE('team_cat', '2');
		    //$this->db->JOIN('category', 'category.cat_id = matchup.category');

		    
		    $result = $this->db->get();
				 if ($result->num_rows() > 0) {
	            return $result->result_array();
				 
				}else {return False;
		}
	}


//ranks
		public function rank()
		{
			
			
			$count=$this->db->count_all('school');
			

			for($i=1,$wins=0,$loss=0,$rate=0;$i<=$count;$i++)
			{
				$this->db->select_sum('wins');
				$this->db->where('FKschool_id',$i);
				$result = $this->db->get('teams');
				 if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $wins = $row->wins;
	                
	            }
				 
				} 


				$this->db->select_sum('loss');
				$this->db->where('FKschool_id',$i);
				$result = $this->db->get('teams');
				if ($result->num_rows() > 0) {
	            foreach ($result->result() as $row) {
	                $loss  = $row->loss;
	               
	            }
				 
				} 

				if($wins==0){

					$rate=0;
				}else{

					$rate=($wins/($wins+$loss))*100;
				}
				


				$data = array(
               	'points' => $rate);
				$this->db->where('school_id', $i);
                $this->db->update('school', $data);

			
			}


			
		
		}
		

		
public function teams($game,$type)
		{
			$this->db->SELECT('*');
		    $this->db->FROM('teams');
		   $this->db->WHERE('game_cat',$game);
			$this->db->WHERE('team_cat', $type);
		    //$this->db->JOIN('category', 'category.cat_id = matchup.category');

		    
		    $result = $this->db->get();
				if ($result->num_rows() > 0) {
	            $teams=$result->result_array();


	  
				}else {$teams=false;}
		
		
		return $teams;

		}


    } 

		
		
