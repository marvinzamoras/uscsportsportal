<?php
class Match extends MY_Controller {

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
                $data['title'] ='Match Up';
                
                $data['rank'] = $this->match_model->rank(); 
                $data['game'] = $this->game_model->get_game($game_id);
                 $data['men'] = $this->match_model->teams($game_id,1);
                 $data['women'] = $this->match_model->teams($game_id,2);
                 $data['mixed'] = $this->match_model->teams($game_id,3);


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
                $this->load->view('includes/header_content', $data);
                $this->load->view('view_all_match', $data);
                $this->load->view('includes/footer');
            
        }




        
        
       

       
}