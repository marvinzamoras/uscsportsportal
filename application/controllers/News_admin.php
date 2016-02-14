<?php
class News_Admin extends MY_Controller {

        public function __construct()
        {
                date_default_timezone_set('Asia/Manila');
                parent::__construct();
                $this->load->model('news_model');
                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
                $this->is_logged_in();
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] ='News And Updates';

                /*$config = array();
                $config["base_url"] = base_url() . "/news_admin/index";
                $config["total_rows"] = $this->news_model->record_count();
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
                $data["results"] = $this->news_model->
                    fetch_news($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();*/

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_news', $data);
                $this->load->view('includes/footer');
               
            
        }

        public function view($slug = NULL)
        {
                $data['news'] = $this->news_model->get_news();
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['news_title'];
                //$data['date'] = date("M d",strtotime($data['news_item']['news_pub']));

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('view_news', $data);
                $this->load->view('includes/footer');
        }


        public function delete($id) {
            $this->news_model->delete_news($id);

            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'News item deleted';

            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content', $data);
            $this->load->view('admin/all_news', $data);
            $this->load->view('includes/footer');
        }

        public function createNews()
        {
            $data['title'] = 'Create News And Updates';
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('news_title', 'Title', 'required|is_unique[news.news_title]');
            $this->form_validation->set_rules('news_content', 'News content', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/news_create');
                $this->load->view('includes/footer');
            }
            else
            {
                $this->news_model->set_news();
                 redirect(base_url().'news_admin/');
            }
        
        }

        public function edit($slug)
        {
            $data['news_item'] = $this->news_model->get_news($slug);

            if (empty($data['news_item']))
            {
                show_404();
            }
             $this->form_validation->set_rules('news_title', 'Title', 'required');
                $this->form_validation->set_rules('news_content', 'Content', 'required');
            $data['title'] = $data['news_item']['news_title'];
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
               
                $this->load->helper('url');
                $slug1 = url_title($this->input->post('news_title'), 'dash', TRUE);
                $date =date('Y-m-d H:i:s');

                if($this->form_validation->run() === FALSE)
                {
                    $this->load->view('admin/news_edit',$data);
                    $this->load->view('includes/footer');
                }
                $data = array(
                'news_title' => $this->input->post('news_title'),
                'news_updated' => $date,
                'slug'=>$slug1,
                'news_content' => $this->input->post('news_content')
            );

                $this->db->where('slug', $slug);
                 $this->db->update('news', $data);
                  redirect(base_url().'news_admin/');
            } else{
                $data['news_item'] = $this->news_model->get_news($slug);
                $this->load->view('admin/news_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        }
                
        
}