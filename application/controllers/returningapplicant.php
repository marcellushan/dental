<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReturningApplicant extends CI_Controller {

    public function get($text)
    {
        session_start();
        $this->load->model('ApplicantModel');
        $applicant = new ApplicantModel();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
//        $data['student']= $student;
        $this->load->view('edit/' . $text, $data);

    }


    public function put()
    {
        session_start();
        // 	    var_dump($_POST);
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
        $this->load->view('templates/header');
        header( "Location: ".base_url() . "review/get");
    }
	
	
}