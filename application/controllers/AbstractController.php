<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


abstract class AbstractController extends CI_Controller 
{
	protected $arregloPost;

	public function __construct(){
		parent::__construct();
				$this->load->model('abstractclassbasicmodel');
                $this->load->library(array('form_validation','session'));
                $this->load->helper(array('url','html','form'));
                $this->user_id = $this->session->userdata('id');
	}


	protected function is_post()
	{
		$tempArray = $this->input->post();
		
		if(empty($tempArray))
		{
			$this->arregloPost = array();
			return FALSE;
		}

		$this->arregloPost = $tempArray;
		return TRUE;
	}


		
}