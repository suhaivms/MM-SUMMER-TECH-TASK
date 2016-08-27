<?php
class Website extends CI_Controller {

		 public function __construct()
        {
                parent::__construct();
                $this->load->model('website_model');
                $this->load->helper('url_helper');
        }

        public function index($page = 'home')
        {

        	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        {
	                // Whoops, we don't have a page for that!
	                show_404();
	        }

       		$data['recent_articles']=$this->website_model->get_recentnews();
	        $this->load->view('templates/header');
	        $this->load->view('pages/'.$page,$data);
	        $this->load->view('templates/footer');
        }

         public function view($id= NULL)
        {
        $data['article'] = $this->website_model->get_article($id);

        if (empty($data['article']))
        {
                show_404();
        }

        $data['title'] = $data['article']['title'];


        $this->load->view('templates/header', $data);
        $this->load->view('pages/article', $data);
        $this->load->view('templates/footer');
    }
}