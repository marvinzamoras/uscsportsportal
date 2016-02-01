<?php
class Team extends MY_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('membership_model');
                $this->load->model('team_model');
                $this->load->helper('url_helper');
                $this->is_logged_in();
        }

    public function index(){

    	 //$data['teams'] = $this->team_model->display_team();
        $data['title'] ='Teams';

    	$results= $this->team_model->display_team();
    	//print_r($results);
    	$data = array('results' => $results, 'title'=>'Teams');
    	$this->load->view('includes/header', $data);
        $this->load->view('includes/header_content', $data);
        $this->load->view('view_all_teams', $data);

    }
}