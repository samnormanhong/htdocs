<?php
  if(!defined('BASEPATH')) exit('No direct access allowed');

  class Ex03_auth extends CI_Controller {
    function __construct() {
      parent::__construct();

      $this->load->database();
      $this->load->model('Ex03_model');
      $this->load->helper(array('form','url','html'));
      $this->load->library(array('form_validation','session'));
    }

    function index() {
      redirect('https://www.bizpower.co.kr/index.php/Ex03/');
    }

    function logout() {
      $this->session->sess_destroy();
      redirect('https://www.bizpower.co.kr/index.php/Ex03/');
    }

    function login() {
      $topics = $this->Ex03_model->gets();
      $this->load->view('Ex03_view_login',array('topics'=>$topics));
    }

    function authentication() {
      $logData = array(
        'id'=>'egoing',
        'password'=>'123456'
      );

      $ID = $this->input->post('inputID');
      $PW = $this->input->post('inputPassword');

      if($ID == $logData['id'] && $PW == $logData['password']) {
        $this->session->set_userdata($ID,TRUE);
        redirect('https://www.bizpower.co.kr/index.php/Ex03/');
      } else {
        $this->session->set_flashdata('errorMessage','login failure~~');
        redirect('https://www.bizpower.co.kr/index.php/Ex03_auth/login');
      }
    }
  }
?>
