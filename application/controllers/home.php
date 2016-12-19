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
	
	public function viewApplicant($id)
	{
	    $this->load->model('ApplicantModel');
	    $data['applicant'] = $this->ApplicantModel->load($id);
	    $this->load->model('EmployerModel');
	    $data['employers'] = $this->EmployerModel->get_list('applicant_id',$id);
	    $this->load->model('LicenseModel');
	    $data['licenses'] = $this->LicenseModel->get_list('applicant_id',$id);
	    $this->load->model('SchoolModel');
	    $data['school'] = $this->SchoolModel->get_item('applicant_id',$id);
	    $this->load->model('IdentificationModel');
	    $data['identification'] = $this->IdentificationModel->get_item('applicant_id',$id);
	    $date = new DateTime($data['identification']->submission_date);
	    $data['identification']->submission_date = $date->format('F d, Y');
	    $this->load->model('CprModel');
	    $data['cpr'] = $this->CprModel->get_item('applicant_id',$id);
	    $date = new DateTime($data['cpr']->submission_date);
	    $data['cpr']->submission_date = $date->format('F d, Y');
	    $date = new DateTime($data['cpr']->expiration_date);
	    $data['cpr']->expiration_date = $date->format('F d, Y');
	    $this->load->view('templates/header');
	    $this->load->view('view_applicant',$data);
	}
	
	public function listApplicants()
	{
	    $this->load->view('templates/header');
	    $this->load->model('ApplicantModel');
	    $data['applicants'] = $this->ApplicantModel->get();
	    // 		var_dump($data['applicants']);
	    $this->load->view('list_applicants',$data);
	}
	

	

	
	
	
	
	

	
	
}