<?php
class Users_Admin extends MY_Controller {

        public function __construct()
        {
                date_default_timezone_set('Asia/Manila');
                parent::__construct();
                $this->load->model('users_model');
                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
                $this->is_logged_in();
        }

        public function index()
        {
                $data['users'] = $this->users_model->get_users();
                $data['title'] ='Users';

                $config = array();
                $config["base_url"] = base_url() . "/Users_Admin/index";
                $config["total_rows"] = $this->users_model->record_count();
                $config["per_page"] = 5;
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
                $data["results"] = $this->users_model->
                    fetch_users($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_users', $data);
                $this->load->view('includes/footer');
               
            
        }

        public function view($id = NULL)
        {
                
                $data['user_item'] = $this->users_model->get_users($id);
                $data['title'] = 'Profile';

                if (empty($data['user_item']))
                {
                        show_404();
                }

                
                //$data['date'] = date("M d",strtotime($data['news_item']['news_pub']));

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/profile', $data);
                $this->load->view('includes/footer');
        }


        public function delete($id,$status) {
            $this->users_model->delete_user($id,$status);

            $data['users'] = $this->users_model->get_user();
            $data['title'] = 'User deleted';

            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content', $data);
            $this->load->view('admin/all_users', $data);
            $this->load->view('includes/footer');
        }

        
                
        
}