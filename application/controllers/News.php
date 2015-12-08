<?php
class News extends MY_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->is_logged_in();
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] ='News Archive';

                $config = array();
                $config["base_url"] = base_url() . "/news/index";
                $config["total_rows"] = $this->news_model->record_count();
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
                $data["results"] = $this->news_model->
                    fetch_news($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                $this->load->view('includes/header', $data);
                $this->load->view('includes/header_content', $data);
                $this->load->view('view_all_news', $data);
                $this->load->view('includes/footer');
               
            
        }

        public function view($slug = NULL)
        {
                //$data['news'] = $this->news_model->get_news();
                $data['news_item'] = $this->news_model->get_news($slug);


                if (empty($data['news_item']))
                {
                        show_404();
                }

                $author = $data['news_item']['admin_id'];
                $data['author_item'] = $this->news_model->get_author($author);
                $data['title'] = $data['news_item']['news_title'];
                //$data['date'] = date("M d",strtotime($data['news_item']['news_pub']));

                $this->load->view('includes/header', $data);
                $this->load->view('includes/header_content', $data);
                $this->load->view('view_news', $data);
                $this->load->view('includes/footer');
        }

        
        
}