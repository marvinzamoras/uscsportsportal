<?php
class Team_admin extends MY_Controller {

        public function __construct()
        {
                 parent::__construct();
                date_default_timezone_set('Asia/Manila');
                $this->load->model('team_model');

                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
                $this->is_logged_in();

        }

        public function index()
        {
            
                $data['teams'] = $this->team_model->get_team();
                $data['title'] ='Teams';

                $config = array();
                $config["base_url"] = base_url() . "/team_admin/index";
                $config["total_rows"] = $this->team_model->record_count();
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
                $data["results"] = $this->team_model->
                    fetch_team($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_teams', $data);
                $this->load->view('includes/footer');
            
        }

        public function createTeam()
        {
            $data['title'] = 'Create Team';
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('team_name', 'Team Name', 'required');
            $this->form_validation->set_rules('game_cat', 'Game Category', 'required');
             $this->form_validation->set_rules('team_cat', 'Team Category', 'required');
            
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/team_create');
                $this->load->view('includes/footer');
            }
            else
            {
                $this->team_model->set_team();
                redirect(base_url().'team_admin/');
            }
        
        }

        public function edit($team_id)
        {
            $data['team_item'] = $this->team_model->get_team($team_id);

            if (empty($data['team_item']))
            {
                show_404();
            }

            $data['title'] = $data['team_item']['team_name'];
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
                  $this->form_validation->set_rules('team_name', 'Team Name', 'required');
            $this->form_validation->set_rules('game_cat', 'Game Category', 'required');
             $this->form_validation->set_rules('team_cat', 'Team Category', 'required');
             $this->form_validation->set_rules('school_id', 'School', 'required');
            
                $this->load->helper('url');
               
                if($this->form_validation->run() === FALSE)
                {
                    $this->load->view('admin/team_edit',$data);
                    $this->load->view('includes/footer');
                }
                $data = array(
                'team_name' => $this->input->post('team_name'),
                'team_cat' => $this->input->post('team_cat'),
                'game_cat'=>$this->input->post('game_cat'),
                'school_id' => $this->input->post('school_id')
                

            );

                $this->db->where('team_id', $team_id);
                 $this->db->update('teams', $data);
                  redirect(base_url().'team_admin/');
            } else{
                $data['team_item'] = $this->team_model->get_team($team_id);
                $this->load->view('admin/team_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        }

       
}