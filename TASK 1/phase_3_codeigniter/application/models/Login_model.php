<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 // Description: Login model class
 
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('admname'));
        $password = $this->security->xss_clean($this->input->post('admpass'));
        
        // Prep the query
        $this->db->where('auser', $username);
        $this->db->where('apass', $password);
        
        // Run the query
        $query = $this->db->get('admin');
        // Let's check if there are any results

        if($query->num_rows()==1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(

                    'username' => $row->auser,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        $data = array('username' => '', 'validated' => false);
        $this->session->set_userdata($data);
        return false;
    }

         public function insertdetails($record) {
                $this->db->insert('article',$record);  
            }     
         public function recentnews()
         {
                
                $query = $this->db->get('article');
                return $query->result_array();
                
         }   

          public function get_article($id) {

                $query = $this->db->get_where('article',array('id'=>$id));
                return $query->row_array();
        } 

        public function show_article(){
            $query = $this->db->get('article');
            $query_result = $query->result();
            return $query_result;
        }



        public function show_article_id($data){
            $this->db->select('*');
            $this->db->from('article');
            $this->db->where('id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
            // Update Query For Selected Student
        public function update_article_id1($id,$data){
            $this->db->where('id', $id);
            $this->db->update('articles', $data);
        }
}
?>
