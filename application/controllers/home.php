<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     *Present welcome screen to new and returning applicants
     */
    public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome');
	}


    /**
     * Asks if employed
     */
    public function display($page)
    {
        $this->load->view('templates/header');
        $this->load->view($page);
    }



	
}