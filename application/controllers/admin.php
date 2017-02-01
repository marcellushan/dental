<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index($id) 
	{	
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
		$this->load->view('view_applicant',$data);
	}
	
	public function get()
	{
		$this->load->view('templates/header');
		$this->load->model('ApplicantModel');
		$data['applicants'] = $this->ApplicantModel->get();
// 		var_dump($data['applicants']);
		$this->load->view('all_applications',$data);
	}
	
	public function getrace()
	{
	    $this->load->model('RaceModel');
	    $data['race']= $this->RaceModel->load(1);
	    var_dump($data['race']);
	    echo $data['race']->race_text;
	}
	
	public function user()
	{
	    $this->load->model('AdminModel');
	    $admin = $this->AdminModel->load(1);
	   var_dump($admin);
	}



    public function update($type,$id)
    {
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($id, array( $type => 'jjones', $type .'_date' => date('Y-m-d')));
//        var_dump($admin);
    }

    public function verify($id)
    {
        $this->load->model('ApplicantModel');
        $applicant = $this->ApplicantModel->load($id);
        foreach($_POST as $item)
        {
            $mymodel = $item . 'Model';
            $this->load->model($mymodel);

            $verify=$this->$mymodel->update($id, array('verified' => 'jjones', 'verified_date' => date('Y-m-d')));

        }

    }
}
