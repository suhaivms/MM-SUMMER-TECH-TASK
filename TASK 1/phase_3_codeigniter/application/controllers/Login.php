<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 // Description: Login controller class

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model("login_model");
         $this->load->helper('url_helper');
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


        public function submit()
        {   
            $data['title'] = $_POST['title'];
            $data['content']= $_POST['article'];
            $data['date']= $_POST['date'];
            $data['image']= $_POST['image'];
            $this->login_model->insertdetails($data);
            $this->load->view('pages/succesfull');
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
                'date' => $this->input->post('date')
                );
                $this->login_model->update_article($id,$data);
                $this->show_article_id();
            }
}
?>