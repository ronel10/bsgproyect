<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('form_model');
                $this->load->library(array('form_validation','session'));

    
  }

  function index(){
    
      if($this->session->userdata('rol')==='Admin'){
          $this->load->view('autorizar/inicio');
      }else{
          echo "Access Denied";
      }

  }

  function all_user(){

      $data['usuarios'] = $this->form_model->all();
      return $this->load->view('users/index' , $data);
  }

  function registro(){
    if ($this->session->userdata('rol')==='Admin') {
      $this->load->view('autorizar/registro');
    }else{
      echo "Access Denied";
    }
  }

  function page_user(){
    //Allowing akses to staff only
    if($this->session->userdata('rol')==='Usuario'){
      $this->load->view('autorizar/inicio');
    }else{
        echo "Access Denied";
    }
  }

  function registronuevo(){
    $this->load->view('autorizar/registronuevo');
  }

}
