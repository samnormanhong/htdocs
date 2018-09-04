<?php
  if(!defined('BASEPATH')) exit('No direct access allowed');

  class Ex01_auth extends CI_Controller {
    function __construct() {
      parent::__construct();

      $this->load->database();
      $this->load->model('Ex01_model');
      $this->load->helper(array('form','url','html'));
      $this->load->library(array('form_validation','session'));
    }

    function index() {
      redirect('http://localhost/index.php/Ex01/');
    }

    function login() {
      $topics = $this->Ex01_model->gets();
      $this->load->view('Ex01_login',array('topics'=>$topics));
    }

    function logout() {
      $this->session->sess_destroy();
      redirect('http://localhost/index.php/Ex01/');
    }

    function authentication() {
      $logData = array(
        'id'=>'egoing',
        'password'=>'123456'
      );

      $ID = $this->input->post('inputID');
      $PW = $this->input->post('inputPassword');

      echo $ID.' | '.$PW.'<br>';

      if($ID == $logData['id'] && $PW == $logData['password']) {
        $this->session->set_userdata($ID,TRUE);
        redirect('http://localhost/index.php/Ex01/');
      } else {
        $this->session->set_flashdata('errorMessage','login failure!!');
        redirect('http://localhost/index.php/Ex01_auth/login');
      }
    }
  }
?>
