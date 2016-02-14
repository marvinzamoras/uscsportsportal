<?php
class Game_admin extends MY_Controller {

        public function __construct()
        {
                 parent::__construct();
                date_default_timezone_set('Asia/Manila');
                $this->load->model('game_model');

                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
                $this->is_logged_in();

        }

        public function index()
        {
            
                $data['games'] = $this->game_model->get_game();
                $data['title'] ='Games';

                /*$config = array();
                $config["base_url"] = base_url() . "/game_admin/index";
                $config["total_rows"] = $this->game_model->record_count();
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
                $data["results"] = $this->game_model->
                    fetch_team($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();*/

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_games', $data);
                $this->load->view('includes/footer');
            
        }

        public function createGame()
        {
            $data['title'] = 'Create Game';
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('game_name', 'Game Name', 'required');
            $this->form_validation->set_rules('game_desc', 'Game Description', 'required');
            $data['game_list'] = $this->game_model->get_dropdown_list();
            
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/game_create',$data);
                $this->load->view('includes/footer');
            }
            else
            {
                $this->game_model->set_game();
                redirect(base_url().'game_admin/');
            }
        
        }

        public function edit($game_id)
        {
            $data['game_item'] = $this->game_model->get_game($game_id);
            $data['game_list'] = $this->game_model->get_dropdown_list();

            if (empty($data['game_item']))
            {
                show_404();
            }
            
            $this->form_validation->set_rules('game_name', 'Game Name', 'required');
            $this->form_validation->set_rules('game_desc', 'Game Description', 'required');
            $data['title'] = $data['game_item']['game_name'];
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
           
            
                $this->load->helper('url');
               
                if($this->form_validation->run() === FALSE)
                {
                    $this->load->view('admin/game_edit',$data);
                    $this->load->view('includes/footer');
                }
                $data = array(
                'game_name' => $this->input->post('game_name'),
                'game_desc' => $this->input->post('game_desc')
            );

                $this->db->where('game_id', $game_id);
                 $this->db->update('game', $data);
                  redirect(base_url().'game_admin/');
            } else{
                $data['game_item'] = $this->game_model->get_game($game_id);
                $this->load->view('admin/game_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        }

       
}