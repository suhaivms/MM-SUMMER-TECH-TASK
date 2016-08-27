<?php
class Website_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_recentnews()
	{
                

                        $query = $this->db->get('article', 12);
                        return $query->result_array();
                
        }
        public function get_article($id) {
                $query = $this->db->get_where('article',array('id'=>$id));
                return $query->row_array();
        }
}
?>