<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome');
	}
	
	public function login()
	{
		$this->load->view('templates/header');
		$this->load->view('login');
	}
	
	public function newApplicant() 
	{
        $this->load->view('templates/header');
        $this->load->view('new_applicant');
	}

    public function returningApplicant () 
    {
        $this->load->view('templates/header');
        $this->load->view('returning_applicant');
	}
	

	
	
	
	
	

	
	
}