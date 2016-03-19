<?php
class Player_admin extends MY_Controller {

        public function __construct()
        {
                 parent::__construct();
                date_default_timezone_set('Asia/Manila');
                $this->load->model('player_model');

                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->helper('url');
                $this->load->library('form_validation');
                $this->is_logged_in();

        }

        public function index()
        {
            
                $data['players'] = $this->player_model->get_player();
                $data['title'] ='Players';

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_players', $data);
                $this->load->view('includes/footer');
            
        }

        public function createPlayer()
        {
            $data['title'] = 'Create Player';
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('player_name', 'Player Name', 'required|is_unique[player.player_name]');
            $this->form_validation->set_rules('player_bio', 'Player Bio', 'required');
            $this->form_validation->set_rules('player_img', 'Player Picture', 'required');
            $this->form_validation->set_rules('player_team', 'Player Team', 'required');
            $this->form_validation->set_rules('player_school', 'Player School', 'required');
            $data['school_list'] = $this->player_model->get_dropdown_list();
            $data['team_list'] = $this->player_model->get_team();
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/player_create',$data);
                $this->load->view('includes/footer');
            }
            else
            {
                $this->player_model->set_player();
                redirect(base_url().'player_admin/index');
            }
        
        }

         public function delete($id) {
            $this->player_model->delete_player($id);

            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'Player deleted';

            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content', $data);
            $this->load->view('admin/all_players', $data);
            $this->load->view('includes/footer');
        }

        public function edit($player_id)
        {
            $data['player_item'] = $this->player_model->get_player($player_id);
            $data['school_list'] = $this->player_model->get_dropdown_list();
            $data['team_list'] = $this->player_model->get_team();
            $data['title'] = 'Edit Player';

            if (empty($data['player_item']))
            {
                show_404();
            }

            $data['player_name'] = $data['player_item']['player_name'];
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
                $this->form_validation->set_rules('player_name', 'Player Name', 'required|callback_check_player');
                $this->form_validation->set_rules('player_bio', 'Player Bio', 'required');
                $this->form_validation->set_rules('player_team', 'Player Team', 'required');
                $this->form_validation->set_rules('player_school', 'Player School', 'required');
                $this->form_validation->set_rules('player_img', 'Player Picture', 'required');
                
               
                if($this->form_validation->run() == FALSE)
                {
                    $this->load->view('admin/player_edit',$data);
                    $this->load->view('includes/footer');
                }

                else{
               
                $data = array(
                'player_name' => $this->input->post('player_name'),
                'player_bio'=> $this->input->post('player_bio'),
                'player_team'=> $this->input->post('player_team'),
                'player_img'=> $this->input->post('player_img'),
                'player_school'=> $this->input->post('player_school')
                
                );

                $this->db->where('player_id', $player_id);
                $this->db->update('player', $data);
                redirect(base_url().'player_admin/index');

                }
            } else{
                $data['player_item'] = $this->player_model->get_player($player_id);
                $this->load->view('admin/player_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        }

        function check_player($player_name)
        {  
            $id= $this->input->post('player_id');
            $result = $this->player_model->check_unique_name($player_name, $id);

            if($result == 0)
                $response = true;
            else {
                $this->form_validation->set_message('check_player', 'Player Name already exist');
                $response = false;
            }
            return $response;
        }

       
}