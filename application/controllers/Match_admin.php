<?php
class Match_admin extends MY_Controller {

        public function __construct()
        {
                 parent::__construct();
                date_default_timezone_set('Asia/Manila');
                $this->load->model('match_model');
                $this->load->model('team_model');
                
                $this->load->model('game_model');
                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
                $this->is_logged_in();

        }

        public function index($game_id)
        {
               
                //$game_name = $this->match_model->get_game($game_id);
                
                $data['match'] = $this->match_model->get_match($game_id);
                $data['game'] = $this->game_model->get_game($game_id);
                $data['title'] ='Match Up';
                /*$data['team1'] = $this->match_model->team1($data['match']);
                $data['team2'] = $this->match_model->team2($data['match']);
                $data['school1'] = $this->match_model->school1($data['match']);
                $data['school2'] = $this->match_model->school2($data['match']);*/
               

                /*$config = array();
                $config["base_url"] = base_url() . "/match_admin/index";
                $config["total_rows"] = $this->match_model->record_count($game_id);
                $config["per_page"] = 10;
                $config["uri_segment"] = 3;
                $choice = $config["total_rows"] / $config["per_page"];
                $config["num_links"] = round($choice);
                $config['prev_link'] = '<i class="fa fa-angle-left">';
                $config['next_link'] = '<i class="fa fa-angle-right">';
                $config['first_tag_open'] = $config['last_tag_open']= $config['num_tag_open'] = '<li>';
                $config['next_tag_open']= '<li class="nav-arr next">';
                $config['prev_tag_open'] = '<li class="nav-arr prev">';
                $config['prev_tag_close'] = '</i></li>';
                $config['next_tag_close']= '</i></li>';
                $config['first_tag_close'] = $config['last_tag_close']= $config['num_tag_close'] = '</li>';
                 
                $config['cur_tag_open'] = "<li>";
                $config['cur_tag_close'] = "</li>";

                $this->pagination->initialize($config);

                $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $data["results"] = $this->match_model->
                    fetch_match($config["per_page"], $page, $game_name);
                $data["links"] = $this->pagination->create_links();*/
               

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_match', $data);
                $this->load->view('includes/footer');
            
        }




        
        
        public function createMatch($game_id)
        {
           
            $data['title'] = 'Create Match';
            $data['game'] = $this->game_model->get_game($game_id);
            $data['category'] = $this->match_model->get_category(); 
           
            
            $data['men'] = $this->match_model->men($game_id); 
            $data['women'] = $this->match_model->women($game_id); 
            $data['mixed'] = $this->match_model->mixed($game_id); 

           
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
           // $this->form_validation->set_rules('team1', 'Team 1', 'required');
            //$this->form_validation->set_rules('team2', 'Team 2', 'required');
            
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('time', 'Time', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
           

            if($this->input->post('category') == 1){

                $team1=$this->input->post('team11'); 
                $team2=$this->input->post('team21'); 

            }elseif($this->input->post('category') == 2){

                $team1=$this->input->post('team12'); 
                $team2=$this->input->post('team22');
            }else{

                $team1=$this->input->post('team13'); 
                $team2=$this->input->post('team23');

            }
            
            

             if ($this->form_validation->run() === FALSE)
            {
                
                
                $this->load->view('admin/match_create',$data);
                $this->load->view('includes/footer');
            }
            
             elseif($team1==" "|| $team2 ==" ")
            {
                
                $data['err_team']= "Team/s should not be empty";
                $this->load->view('admin/match_create',$data);
                $this->load->view('includes/footer');
            }

            elseif($team1==$team2)
            {
                
                $data['err_team']= "Cannot match the same team";
                $this->load->view('admin/match_create',$data);
                $this->load->view('includes/footer');
            }
            
           
            
            else
            {   
                $this->match_model->set_match($team1,$team2);
                redirect(base_url().'match_admin/index/'.$data['game']['game_id']);
                
            }
        
        }

        public function edit($match_id,$game_id)
        {
            $data['match'] = $this->match_model->view_match($match_id); 
            $data['category'] = $this->match_model->get_category(); 
            $data['game'] = $this->game_model->get_game($game_id);
            $data['men'] = $this->match_model->men($game_id); 
            $data['women'] = $this->match_model->women($game_id); 
            $data['mixed'] = $this->match_model->mixed($game_id); 

            
            if (empty($data['match']))
            {
              
                show_404();
            }

            $data['title'] = "Match Up";
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
             $this->load->view('admin/match_edit',$data);
            

            if($this->input->post('submit')){
                //$this->form_validation->set_rules('team1', 'Team 1', 'required');
                //$this->form_validation->set_rules('team2', 'Team 2', 'required');
                $this->form_validation->set_rules('category', 'Category', 'required');
                $this->form_validation->set_rules('time', 'Time', 'required');
                $this->form_validation->set_rules('date', 'Date', 'required');
                //$this->form_validation->set_rules('team1_score', 'Team 1 Score', 'required');
                //$this->form_validation->set_rules('team2_score', 'Team 2 Score', 'required');
                //$this->form_validation->set_rules('winner', 'Winner', 'required');
              
                
            
                $this->load->helper('url');
               
            if($this->input->post('category') == 1){

                $team1=$this->input->post('team11'); 
                $team2=$this->input->post('team21'); 

            }elseif($this->input->post('category') == 2){

                $team1=$this->input->post('team12'); 
                $team2=$this->input->post('team22');
            }else{

                $team1=$this->input->post('team13'); 
                $team2=$this->input->post('team23');

            }
            
            

             if ($this->form_validation->run() === FALSE)
            {
                
                
                $this->load->view('admin/match_edit',$data);
                $this->load->view('includes/footer');
            }
            
             elseif($team1==" "|| $team2 ==" ")
            {
                
                $data['err_team']= "Team/s should not be empty";
                $this->load->view('admin/match_edit',$data);
                $this->load->view('includes/footer');
            }

            elseif($team1==$team2)
            {
                
                $data['err_team']= "Cannot match the same team";
                $this->load->view('admin/match_edit',$data);
                $this->load->view('includes/footer');
            }
            
           
            
            else
            {   
                $this->match_model->edit_match($match_id,$team1,$team2);
                redirect(base_url().'match_admin/index/'.$data['game']['game_id']);
                
            }
        
        }
    }



            public function update($match_id)
        {

            $data['match'] = $this->match_model->view_match($match_id); 
            
            $data['match_id'] = $match_id;

            

            if (empty($data['match']))
            {
              
                show_404();
            }

            $data['title'] = "Match Up";
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
               
                $this->form_validation->set_rules('team1_score', 'Team 1 Score', 'required');
                $this->form_validation->set_rules('team2_score', 'Team 2 Score', 'required');
                $this->form_validation->set_rules('winner', 'Winner', 'required');
              
                $w=$this->input->post('winner');
                $t1=$this->input->post('team1_score');
                $t2=$this->input->post('team2_score');
            
                $this->load->helper('url');
               
                if($this->form_validation->run() === FALSE)
                {
                    $this->load->view('admin/match_update',$data);
                    $this->load->view('includes/footer');
                }else if($w=="team1" && $t1<=$t2){

                    $data['error']="Winner must have a higher score ";
                     $this->load->view('admin/match_update',$data);
                    $this->load->view('includes/footer');
                }else if($w=="team2" && $t1>=$t2){

                    $data['error']="Winner must have a higher score ";
                     $this->load->view('admin/match_update',$data);
                    $this->load->view('includes/footer');
                }

                $data = array(
                
                'team1_score'=>$this->input->post('team1_score'),
                'team2_score' => $this->input->post('team2_score'),
                
                
                

            );

                $this->db->where('match_id', $match_id);    
                $this->db->update('matchup', $data);
                $data['matchup'] = $this->match_model->view_match($match_id); 
                $res1 = $this->input->post('winner');
                $team1 = $data['matchup']['team1']['team_id'];
                $team2 = $data['matchup']['team2']['team_id'];

                $this->match_model->points($res1,$team1,$team2);
               
                $this->match_model->result($res1,$match_id);
                $this->match_model->rank();

                redirect(base_url().'match_admin/index/'.$data['matchup']['game']);
                }
    
               
                $this->load->view('admin/match_update',$data);
                $this->load->view('includes/footer');
            }


            public function cancel($match_id,$game_id) {
            

            $data['match'] = $this->match_model->view_match($match_id);
           
             
           $this->match_model->cancel_match( $data['match']['match_id'],$data['match']['status']);
            redirect(base_url().'match_admin/index/'.$data['match']['game']);
           
        
            
            
           
            }
        
         
            
        


        //function get_team1($school1,$category){
                 //$this->load->model('Model_form','', TRUE);    
                // header('Content-Type: application/x-json; charset=utf-8');
                 //echo(json_encode($this->match_model->get_team1($school1,$category)));
    //} 

       
}