<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 // Description: Login controller class

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("login_model");
         $this->load->helper('url_helper');
         $this->load->helper(array('form', 'url'));
         
    }

     public function index($msg = NULL){
        $data['recentarticles']=$this->login_model->recentnews();
        
        // Load our view to be displayed
        // to the user
        $is_validated=$this->session->userdata('validated');
        if(!$is_validated) {
            $data['msg'] = $msg;
            $this->load->view('pages/admin', $data);
        }
        else
            $this->load->view('pages/adminpannel');
    }
    
    public function process(){
        
        $is_validated=$this->session->userdata('validated');

        if(!$is_validated){
            // Validate the user can login
            $result = $this->login_model->validate();
            // Now we verify the result
            // If user did not validate, then show them login page again
            $msg = ($is_validated===NULL)? '' : '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
            $this->load->view('pages/adminpannel');
        } 

    }

    public function logout()
    {
        $this->session->unset_userdata(array( 'username','validated' ));
        redirect(site_url('index.php/login'));
    }

    public function create()
    {
        $is_validated=$this->session->userdata('validated');

        if(!$is_validated)
        {
            redirect(site_url('index.php/login'));
        }
        else
        {
            $this->load->view('pages/create_article');
        }
    }


        public function do_upload()
        {   
            $data['title'] = $_POST['title'];
            $data['article']= $_POST['article'];
            $data['date']= $_POST['date'];
            $data['img_name']=$image;
                    $config = array(
                    'upload_path' => "./uploads/",
                    'allowed_types' => "gif|jpg|png|jpeg|pdf",
                    'overwrite' => TRUE,
                    'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                    'max_height' => "768",
                    'max_width' => "1024"
                );
                $this->load->library('upload', $config);
                 
                $this->upload->do_upload('img_name');
                $data_upload_files = $this->upload->data();

                if($this->upload->do_upload())
                {
                    $data = array('upload_data' => $this->upload->data());
                    $this->login_model->insertdetails($data);
                    $this->load->view('pages/article',$data);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('pages/succesfull', $error);
                }
            $this->login_model->insertdetails($data);
            

        }

         public function edit_pannel()
        {
                    $data['recentarticles']=$this->login_model->recentnews();
        

            $is_validated=$this->session->userdata('validated');

            if(!$is_validated)
            {
                redirect(site_url('index.php/login'));
            }
            else
            {
                $this->load->view('pages/edit_article',$data);
            }
        }

       
         public function edit($id=NULL)
        {
            if($id!==NULL)
            {
              
            $data['article']=$this->login_model->get_article($id);
            $data['single_article'] = $this->login_model->show_article_id($id);
            $this->load->view('pages/edit_article_form',$data);

            }
        }

        public function edit1($id=NULL)
        {
            if($id!==NULL)
            {
              
            $data['article']=$this->login_model->get_article($id);
            $data['single_article'] = $this->login_model->show_article_id($id);
            $this->load->view('templates/header');
            $this->load->view('templates/logout');
            $this->load->view('pages/article',$data);
            $this->load->view('templates/footer',$data);


            }
        }
        /* public function show_article_id() {
                $id = $this->uri->segment(3);
                $data['articles'] = $this->login_model->show_article();
                $data['single_article'] = $this->login_model->show_article_id($id);
                $this->load->view('update_view', $data);
            }
        */
        public function update_article_id1() {
                $id= $this->input->post('id');
                $data = array(
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'article'=>$this->input->post('article')
                );
                $this->login_model->update_article_id1($id,$data);
                $this->edit1($id);
            }

                
            /*public function do_upload(){
                $config = array(
                    'upload_path' => "./uploads/",
                   */
}
?>