<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

    public function __construct()
     {
     	$this->load->database();
          $this->load->helper('url');
     } 
	
     public function get_article(){
     	$query = $this->db->get('personal_blog');
     	return $query;
     }

     public function get_article_by_id($id){
     	$query = $this->db->get_where('personal_blog', array('id' => $id));
     	return $query->row_array();
     }

     public function set_article($id = 0, $data){
          if($id == 0){
               return $this->db->insert('personal_blog', $data);          
          }else{
               $this->db->where('id',$id);
               return $this->db->update('personal_blog', $data);
          }
          
     }
     public function delete_article($id){
          $this->db->where('id', $id);
          return $this->db->delete('personal_blog');
     }
}

?>