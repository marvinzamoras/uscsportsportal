<?php
class Match_admin extends MY_Controller {

        public function __construct()
        {
                 parent::__construct();
                date_default_timezone_set('Asia/Manila');
                $this->load->model('match_model');
                
                
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
                $data['name'] = $game_name;
                $data['match'] = $this->match_model->get_match($game_name);
                $data['title'] ='Match Up';

                $config = array();
                $config["base_url"] = base_url() . "/match_admin/index";
                $config["total_rows"] = $this->match_model->record_count($game_name);
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
                    fetch_match($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_match', $data);
                $this->load->view('includes/footer');
            
        }

        public function createMatch()
        {
            $data['title'] = 'Create Match';
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('team1', 'Team 1', 'required');
            $this->form_validation->set_rules('team2', 'Team 2', 'required');
            $this->form_validation->set_rules('game_cat', 'Game Category', 'required');
            $this->form_validation->set_rules('team_cat', 'Team Category', 'required');
            $this->form_validation->set_rules('school1', 'School 1', 'required');
            $this->form_validation->set_rules('school2', 'School 2', 'required');
            $this->form_validation->set_rules('time', 'Time', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $data['school_list'] = $this->match_model->get_dropdown_list();
            $data['game_list'] = $this->match_model->get_game();
            
            
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/match_create',$data);
                $this->load->view('includes/footer');
            }
            else
            {
                $this->match_model->set_match();
                redirect(base_url().'match_admin/');
            }
        
        }

        public function edit($match_id)
        {
            $data['match_item'] = $this->match_model->get_match($match_id);
            $data['school_list'] = $this->match_model->get_dropdown_list();
            $data['game_list'] = $this->match_model->get_game();
            $data['team_list'] = $this->match_model->get_team();
           

            if (empty($data['match_item']))
            {
                show_404();
            }

            $data['title'] = "Match Up";
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
                $this->form_validation->set_rules('team1', 'Team 1', 'required');
                $this->form_validation->set_rules('team2', 'Team 2', 'required');
                $this->form_validation->set_rules('game', 'Game Category', 'required');
                $this->form_validation->set_rules('category', 'Category', 'required');
                $this->form_validation->set_rules('school1', 'School 1', 'required');
                $this->form_validation->set_rules('school2', 'School 2', 'required');
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
                  redirect(base_url().'match_admin/');
            } else{
                $data['match_item'] = $this->match_model->get_match($match_id);
                $this->load->view('admin/match_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        }

       
}