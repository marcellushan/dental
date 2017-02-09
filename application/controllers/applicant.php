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
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        if($data = $this->ApplicantModel->entry_exists('GHC_ID', @$_POST['GHC_ID'])) {
            $this->load->view('exists');
        } else {
            (@$_POST['GHC_ID'] ? $applicant->GHC_ID = $_POST['GHC_ID'] : $applicant->GHC_ID = "Not Student");
            $applicant->application_date = date('Y-m-d');
            $applicant->preferred_email = $_SESSION['email'];
            $applicant->password = $_SESSION['password'];
            $applicant->save();
            $_SESSION['applicant_id'] = $applicant->applicant_id;
            $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
            $this->load->view('personal', $data);
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
    public function get($text, $returning=0)
    {
        session_start();
        $this->load->model('ApplicantModel');
        $applicant = new ApplicantModel();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
        ($returning ? $this->load->view('edit/' . $text, $data):$this->load->view($text, $data));

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
//        var_dump($_POST);
        (@$_POST? $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST):"");
        $this->load->view('templates/header');
        ($destination=="returning"? redirect(base_url('/returning/get')):$this->load->view($destination));
    }


    public function save()
    {
        session_start();
        $this->load->model('ApplicantModel');
        $applicant = new ApplicantModel();
        $this->load->view('templates/header');
        if($data = $this->ApplicantModel->entry_exists('preferred_email', $_POST['email'])) {
            $this->load->view('exists');
        } else {
           $_SESSION['email'] = $_POST['email'];
           $_SESSION['password'] = $_POST['password'];

            $this->load->view('student');
        }

    }
	
}