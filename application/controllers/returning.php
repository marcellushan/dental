<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant extends CI_Controller {

    public function post()
    {
        session_start();

        $this->load->model('ApplicantModel');
        $applicant = new ApplicantModel();
        $this->load->view('templates/header');
        if(! $data = $this->ApplicantModel->entry_exists('preferred_email', $_POST['email'])) {
            $applicant->application_date = date('Y-m-d');
            $applicant->preferred_email = $_POST['email'];
            $applicant->password = $_POST['password'];
            $applicant->save();
            $_SESSION['applicant_id'] = $applicant->applicant_id;
            $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
            $this->load->view('student', $data);
        } else {
            $data = array('email' => $_POST['email']);
            $this->load->view('exists', $data);
            $this->load->view('welcome');
        }

    }

    /**
     * View existing personal information
     * @param int $applicant_type
     */
    public function get($text, $student=0)
    {
        session_start();
        $this->load->model('ApplicantModel');
        $applicant = new ApplicantModel();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
        $data['student']= $student;
        $this->load->view($text, $data);

    }

    public function checkLogin()
    {
        session_start();
        $this->load->helper('url');
        if(@$_POST['email']) {
            $this->load->model('ApplicantModel');
            $applicant = new ApplicantModel();
            $returning_app= $applicant->get_login('preferred_email', $_POST['email'], $_POST['password']);
            if(@$returning_app) {
                $_SESSION['applicant_id'] = $returning_app->applicant_id;
//                $this->load->view('templates/header');
//                $this->load->view('view_sections');
                header( "Location: ".base_url() . "home/review");


            } else {
                $this->load->view('templates/header');
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('view_sections');

        }


    }
	
}