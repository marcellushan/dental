<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * index
     *
     * Presents welcome screen to new and returning applicants
     */

    public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome');
	}


    /**
     * display
     *
     * Displays the view that is sent as a parameter
     *
     * @param $page
     */
    public function display($page)
    {
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        $this->load->view($page, $data);
    }


    /**
     * checkLogin
     *
     * Validates if user is logged into the system
     */
    public function checkLogin()
    {
        session_start();
        $this->load->helper('url');
//        if(@$_POST['email']) {
            $this->load->model('ApplicantModel');
            $applicant = new ApplicantModel();
            $email= $applicant->get_login('preferred_email', $_POST['email']);
            $password= $applicant->get_login('password', $_POST['password']);
            if(@email && @$password) {
                $_SESSION['applicant_id'] = $email->applicant_id;
                $this->load->view('templates/header');
                $this->load->view('view_sections');
                header( "Location: ".base_url() . "submit/get");


            } else {
                $this->load->view('templates/header');
                echo "user not found";
            }
//        } else {
//            $this->load->view('templates/header');
//            $this->load->view('view_sections');
//
//        }




    }

}