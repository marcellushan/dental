<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index($id) 
	{	
		$this->load->model('applicant_model');
		$data['applicant'] = $this->applicant_model->load($id);
		$this->load->model('employer_model');
		$data['employers'] = $this->employer_model->get_list('applicant_id',$id);
		$this->load->model('license_model');
		$data['licenses'] = $this->license_model->get_list('applicant_id',$id);
// 		$this->load->model('demo_model');
// 		$data['demo'] = $this->demo_model->get_item('application_id',$id);
		$this->load->model('school_model');
		$data['school'] = $this->school_model->get_item('applicant_id',$id);
// 		$this->load->model('program_model');
// 		$data['program'] = $this->program_model->get_item('application_id',$id);
		echo "<pre>";
		var_dump($data['school']);
		echo "</pre>";

		$this->load->view('templates/header');
		$this->load->view('show_application',$data);	
	}
	
	public function all_applications()
	{
		$this->load->view('templates/header');
		$this->load->model('applicant_model');
		$data['applicants'] = $this->applicant_model->get();
// 		var_dump($data['applicants']);
		$this->load->view('all_applications',$data);
	}
	
}
