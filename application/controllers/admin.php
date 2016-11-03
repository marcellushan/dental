<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index($id) 
	{	
// 		$id = 76;
		$this->load->view('templates/header');
		$this->load->model('application_model');
		$data['application'] = $this->application_model->load($id);
		$this->load->model('document_model');
		$data['driver'] = $this->document_model->get_item('application_id',$id,1);
		$this->load->model('document_model');
		$data['cpr'] = $this->document_model->get_item('application_id',$id,2);
		$this->load->model('school_model');
		$data['school'] = $this->school_model->get_item('application_id',$id);
		$this->load->model('license_model');
		$data['licenses'] = $this->license_model->get_list('application_id',$id);
		$this->load->model('emergency_model');
		$data['emergency'] = $this->emergency_model->get_item('application_id',$id);
		$this->load->model('employer_model');
		$data['employers'] = $this->employer_model->get_list('application_id',$id);
		$this->load->model('demo_model');
		$data['demo'] = $this->demo_model->get_item('application_id',$id);
// 		var_dump($data);
		echo $data['demo']->race;

		$this->load->view('show_application',$data);	
	}
	
	public function all_applications()
	{
		$this->load->view('templates/header');
		$this->load->model('application_model');
		$data['applications'] = $this->application_model->get();
// 		var_dump($data['applications']);
		$this->load->view('all_applications',$data);
	}
}