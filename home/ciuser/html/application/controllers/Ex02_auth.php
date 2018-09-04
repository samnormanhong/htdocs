<?php
  if(!defined('BASEPATH')) exit('No direct access allowed');

  class Ex02_auth extends CI_Controller {
    function __construct() {
      parent::__construct();

      $this->load->database();
      $this->load->model('Ex02_model');
      $this->load->helper(array('form','url','html'));
      $this->load->library(array('form_validation','session'));
    }

    function login() {
      $topics = $this->Ex02_model->gets();
      $this->load->view('Ex02_view_login',array('topics'=>$topics));
    }

    function logout() {
      $this->session->sess_destroy();
      redirect('https://www.bizpower.co.kr/index.php/Ex02/');
    }

    function authentication() {
      $logData = array(
        'id'=>'egoing',
        'password'=>'123456'
      );

      $ID = $this->input->post('inputID');
      $PW = $this->input->post('inputPassword');

      if($ID == $logData['id'] && $PW == $logData['password']) {
        $this->session->set_userdata('egoing',TRUE);
        redirect('https://www.bizpower.co.kr/index.php/Ex02/');
      } else {
        $this->session->set_flashdata('errorMessage','login failure!!');
        $topics = $this->Ex02_model->gets();
        $this->load->view('Ex02_view_login',array('topics'=>$topics));
      }
    }
  }
?>
