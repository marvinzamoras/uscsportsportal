<?php
class Player extends MY_Controller {

    public function __construct()
        {
                parent::__construct();
                //$this->load->model('membership_model');
                $this->load->model('player_model');
                $this->load->helper('url_helper');
                //$this->is_logged_in();
        }
 

    public function view($team_id){
        $results = $this->player_model->view_player($team_id);
        $data['title'] ='Players';
        $this->load->view('includes/header', $data);
        $this->load->view('includes/header_content', $data);
        $data = array('results' => $results, 'title'=>'Players');
        $this->load->view('view_all_players', $data);
        $this->load->view('includes/footer');
    }

     public function view_player($player_id){
       $data['player_item'] = $this->player_model->retrieve_player($player_id);
        $data['title'] ='Players';
        $this->load->view('includes/header', $data);
        $this->load->view('includes/header_content', $data);
        $this->load->view('view_player', $data);
         $this->load->view('includes/footer');
    }
}