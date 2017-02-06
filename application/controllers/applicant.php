<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant extends CI_Controller {

    /*
     * post
     *
     * Creates a new applicant
     *
     * */


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
     * get
     *
     * Retrieves existing personal information for applicant ID stored in the session
     *
     * @param string $text The view to be displayed
     *
     * @param int $student Identfies whether applicant is current GHC student
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
     * put
     *
     * Creates an new instance of the item sent as the parameter
     *
     * @param string $destination View to be displayed following the action
     */
    public function put($destination)
    {
        session_start();
        $this->load->model('ApplicantModel');
        (@$_POST? $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST):"");
        $this->load->view('templates/header');
        ($destination=="submit"? redirect(base_url('/submit/get')):$this->load->view($destination));
    }



	
	
}