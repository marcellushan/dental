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

    /**
     * Update the applicant table with info stored in the $_POST array
     *
     * Display the $destination view
     *
     * @param string $destination
     */
    public function put($destination)
    {
        session_start();
        // 	    var_dump($_POST);
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
        $this->load->view('templates/header');
        $this->load->view($destination);
    }



	
	
}