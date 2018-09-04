<?php
  if(!defined('BASEPATH')) exit('No direct access allowed');

  class Ex01 extends CI_Controller {
    function __construct() {
      parent::__construct();

      $this->load->database();
      $this->load->model('Ex01_model');
      $this->load->helper(array('form','url','html'));
      $this->load->library(array('form_validation','session'));
    }

    function index() {
      $topics = $this->Ex01_model->gets();
      $this->load->view('Ex01_view_main',array('topics'=>$topics));
    }

    function get($topic_id) {
      $topics = $this->Ex01_model->gets();
      $topic = $this->Ex01_model->get($topic_id);
      $this->load->view('Ex01_view_get',array('topics'=>$topics,'topic'=>$topic));
    }

    function add() {
      if(!$this->session->userdata('egoing')) {
        redirect('http://localhost/index.php/Ex01_auth/login/');
      }
      $this->form_validation->set_rules('inputTitle','title','required');
      $this->form_validation->set_rules('inputDescription','contents','required');

      if($this->form_validation->run() == FALSE) {
        $topics = $this->Ex01_model->gets();
        $this->load->view('Ex01_view_add',array('topics'=>$topics));
      } else {
        $title = $this->input->post('inputTitle');
        $description = $this->input->post('inputDescription');
        $topic_id = $this->Ex01_model->add($title,$description);

        redirect('http://localhost/index.php/Ex01/get/'.$topic_id);
      }
    }
  }
?>
