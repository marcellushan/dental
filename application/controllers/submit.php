<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {

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
	
}