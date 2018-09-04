<?php
  class Ex03_model extends CI_Model {
    function __construct() {
      parent::__construct();
    }

    public function gets() {
      return $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($id) {
      $this->db->select('id');
      $this->db->select('title');
      $this->db->select('description');
      $this->db->select('created');

      return $this->db->get_where('topic',array('id'=>$id))->row();
    }

    public function add($title,$description) {
      $this->db->set('created','NOW()',FALSE);
      $this->db->insert('topic',array('title'=>$title,'description'=>$description));

      return $this->db->insert_id();
    }
  }
?>
