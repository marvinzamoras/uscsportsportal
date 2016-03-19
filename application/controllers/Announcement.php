<?php
class Announcement extends MY_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('announcement_model');
                $this->load->library("pagination");
                //$this->load->model('membership_model');
                $this->load->helper('url_helper');
               // $this->is_logged_in();
        }

        public function index()
        {
                $data['announcements'] = $this->announcement_model->get_announcement();
                $data['title'] ='Announcements';

                $config = array();
                $config["base_url"] = base_url() . "/announcement/index";
                $config["total_rows"] = $this->announcement_model->record_count();
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
                $data["results"] = $this->announcement_model->
                    fetch_announcement($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                $this->load->view('includes/header', $data);
                $this->load->view('includes/header_content', $data);
                $this->load->view('view_all_announcements', $data);
                $this->load->view('includes/footer');
               
            
        }

        public function view($slug = NULL)
        {
                //$data['announcements'] = $this->announcement_model->get_announcement();
                $data['ann_item'] = $this->announcement_model->get_announcement($slug);

                if (empty($data['ann_item']))
                {
                        show_404();
                }
                $author = $data['ann_item']['admin_id'];
                $data['author_item'] = $this->announcement_model->get_author($author);
                $data['title'] = $data['ann_item']['ann_title'];
                //$data['date'] = date("M d",strtotime($data['news_item']['news_pub']));

                $this->load->view('includes/header', $data);
                $this->load->view('includes/header_content', $data);
                $this->load->view('view_announcement', $data);
                $this->load->view('includes/footer');
        }

        
        
}