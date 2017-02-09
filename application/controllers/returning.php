<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Returning extends CI_Controller {

    public function get()
    {
        session_start();
        $id = $_SESSION['applicant_id'];
        $this->load->model('ApplicantModel');
        $data['applicant'] = $this->ApplicantModel->load($id);
        $this->load->model('RaceModel');
        $data['race']= $this->RaceModel->load($data['applicant']->race);
        $this->load->model('IdentificationModel');
        $data['identification'] = $this->IdentificationModel->get_item('applicant_id',$id);
        $this->load->model('CprModel');
        $data['cpr'] = $this->CprModel->get_item('applicant_id',$id);
        $this->load->model('EmployerModel');
        $data['employers'] = $this->EmployerModel->get_list('applicant_id',$id);
        $this->load->model('LicenseModel');
        $data['licenses'] = $this->LicenseModel->get_list('applicant_id',$id);
        $this->load->model('SchoolModel');
        $data['school'] = $this->SchoolModel->get_item('applicant_id',$id);
        $this->load->view('templates/header');
        $this->load->view('submit',$data);

    }

    public function put($destination)
    {
        session_start();
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], array("submitted"=> 1, "submit_date" => date('Y-m-d')));
        $this->email->from('webmaster@highlands.edu', 'Webmaster');
        $this->email->to('mhannah@highlands.edu');
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
        $this->load->view('templates/header');
        ($destination=="submit"? redirect(base_url('/submit/get')):$this->load->view($destination));
    }
	
}