<?php
class Announcement_admin extends MY_Controller {

        public function __construct()
        {
                 parent::__construct();
                date_default_timezone_set('Asia/Manila');
                $this->load->model('announcement_model');

                $this->load->library("pagination");
                $this->load->model('membership_model');
                $this->load->helper('url_helper');
                $this->load->library('form_validation');
                $this->is_logged_in();

        }

        public function index()
        {
            
                $data['announcements'] = $this->announcement_model->get_announcement();
                $data['title'] ='Announcements';

                $config = array();
                $config["base_url"] = base_url() . "/announcement_admin/index";
                $config["total_rows"] = $this->announcement_model->record_count();
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
                $data["results"] = $this->announcement_model->
                    fetch_announcement($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                $this->load->view('includes/header', $data);
                $this->load->view('admin/header_content', $data);
                $this->load->view('admin/all_announcements', $data);
                $this->load->view('includes/footer');
            
        }

        public function createAnnouncement()
        {
            $data['title'] = 'Create Announcement';
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');
            $this->form_validation->set_rules('ann_title', 'Title', 'required|is_unique[announcements.ann_title]');
            $this->form_validation->set_rules('ann_content', 'Content', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                //$this->load->view('templates/header');
                $this->load->view('admin/announcement_create');
                $this->load->view('includes/footer');
            }
            else
            {
                $this->announcement_model->set_announcement();
                redirect(base_url().'announcement_admin/');
            }
        
        }

         public function delete($id) {
            $this->announcement_model->delete_announcement($id);

            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'Announcement item deleted';

            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content', $data);
            $this->load->view('admin/all_announcements', $data);
            $this->load->view('includes/footer');
        }

        public function edit($slug)
        {
            $data['ann_item'] = $this->announcement_model->get_announcement($slug);

            if (empty($data['ann_item']))
            {
                show_404();
            }

            $data['title'] = $data['ann_item']['ann_title'];
            $this->load->view('includes/header', $data);
            $this->load->view('admin/header_content');

            if($this->input->post('submit')){
                  $this->form_validation->set_rules('ann_title', 'Title', 'required|is_unique[announcements.ann_title]');
            $this->form_validation->set_rules('ann_content', 'Content', 'required');
                
                $this->load->helper('url');
               
                if($this->form_validation->run() === FALSE)
                {
                    $this->load->view('admin/announcement_edit',$data);
                    $this->load->view('includes/footer');
                }
                $data = array(
                'ann_title' => $this->input->post('ann_title'),
                'ann_updated' => $date,
                'slug'=>$slug1,
                'ann_content' => $this->input->post('ann_content')
            );

                $this->db->where('slug', $slug);
                 $this->db->update('announcements', $data);
                  redirect(base_url().'announcement_admin/');
            } else{
                $data['ann_item'] = $this->announcement_model->get_announcement($slug);
                $this->load->view('admin/announcement_edit',$data);
                $this->load->view('includes/footer');
            }
           
            
        }

       
}