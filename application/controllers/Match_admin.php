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

        public function index($game_id,$game_name)
        {
               
                //$game_name = $this->match_model->get_game($game_id);
                
                $data['match'] = $this->match_model->get_match($game_id);
                $data['title'] ='Match Up';
                $data['team1'] = $this->match_model->team1($data['match']);
                $data['team2'] = $this->match_model->team2($data['match']);
                $data['school1'] = $this->match_model->school1($data['match']);
                $data['school2'] = $this->match_model->school2($data['match']);

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
                $data['name'] = $game_name;
                $data['gameid'] = $game_id;

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_match', $data);
                $this->load->view('includes/footer');
            
        }

        public function createMatch($game_name,$game_id)
        {
            $data['title'] = 'Create Match';
            $data['category'] = $this->match_model->get_category(); 
            $data['school'] = $this->team_model->get_school();
            $data['team'] = $this->match_model->get_teams($game_id);
            $data['name'] = $game_name;
            $data['gameid'] = $game_id;
            
            


            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('team1', 'Team 1', 'required');
            $this->form_validation->set_rules('team2', 'Team 2', 'required');
            //$this->form_validation->set_rules('game', 'Game', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('time', 'Time', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $data['school_list'] = $this->match_model->get_dropdown_list();
            //s$data['game_list'] = $this->match_model->get_game();
            
            
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/match_create',$data);
                $this->load->view('includes/footer');
            }
            else
            {   
                $this->match_model->set_match();
                $id=$this->input->post('game');
                $name=$this->input->post('name');
                redirect(base_url().'match_admin/index/'.$id.'/'.$name);
                
            }
        
        }

        public function edit($match_id,$game_name,$game_id)
        {
            $data['match'] = $this->match_model->view_match($match_id); 
            $data['category'] = $this->match_model->get_category(); 
            $data['school'] = $this->team_model->get_school();
            $data['team'] = $this->match_model->get_teams($game_id);
            $data['name'] = $game_name;
            $data['game_id'] = $game_id;
            $data['team1'] = $this->match_model->view_team1($match_id);
            $data['team2'] = $this->match_model->view_team2($match_id);
            $data['school1'] = $this->match_model->view_school1($match_id);
            $data['school2'] = $this->match_model->view_school2($match_id);

            if (empty($data['match']))
            {
               echo $game_id;
                //show_404();
            }

            $data['title'] = "Match Up";
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
                $this->form_validation->set_rules('team1', 'Team 1', 'required');
                $this->form_validation->set_rules('team2', 'Team 2', 'required');
               // $this->form_validation->set_rules('game', 'Game Category', 'required');
                $this->form_validation->set_rules('category', 'Category', 'required');
               // $this->form_validation->set_rules('school1', 'School 1', 'required');
                //$this->form_validation->set_rules('school2', 'School 2', 'required');
                $this->form_validation->set_rules('time', 'Time', 'required');
                $this->form_validation->set_rules('date', 'Date', 'required');
                $this->form_validation->set_rules('team1_score', 'Team 1 Score', 'required');
                $this->form_validation->set_rules('team2_score', 'Team 2 Score', 'required');
                $this->form_validation->set_rules('team1_res', 'Team 1 Result', 'required');
                $this->form_validation->set_rules('team2_res', 'Team 2 Result', 'required');
                
            
                $this->load->helper('url');
               
                if($this->form_validation->run() === FALSE)
                {
                    $this->load->view('admin/match_edit',$data);
                    $this->load->view('includes/footer');
                }
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

                $this->db->where('match_id', $match_id);
                $this->db->update('matchup', $data);
                $res1 = $this->input->post('team1_res');
                //$res2 = $this->input->post('team2_res');
                $team1 = $this->input->post('team1');
                $team2 =  $this->input->post('team2');
                $this->match_model->points($res1,$team1,$team2);
                  redirect(base_url().'match_admin/');
                }
    
                //$data['match'] = $this->match_model->view_match($match_id);
               //$data['team2'] = $this->match_model->team2($data['match']);
                //$data['school1'] = $this->match_model->school1($data['match']);
                //$data['school2'] = $this->match_model->school2($data['match']);
               // $data['category'] = $this->match_model->get_category(); 
                $this->load->view('admin/match_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        


        //function get_team1($school1,$category){
                 //$this->load->model('Model_form','', TRUE);    
                // header('Content-Type: application/x-json; charset=utf-8');
                 //echo(json_encode($this->match_model->get_team1($school1,$category)));
    //} 

       
}