<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	

	
	public function index($type=0)
	{
		$this->load->view('templates/header');
		$this->load->model('ApplicantModel');
        $data['type'] = $type;
        ($type ? $data['applicants'] = $this->ApplicantModel->get_category($type) : $data['applicants'] = $this->ApplicantModel->get());
        echo ($data['applicants'] ? $this->load->view('applications',$data) : "No " . $type . "applications");
// 		var_dump($data['applicants']);

	}

    /**
     * display
     *
     * Displays the view that is sent as a parameter
     *
     * @param $page
     */
    public function display($page)
    {
        $this->load->view('templates/header');
        $this->load->view($page);
    }

	public function get($id)
    {
        ini_set('display_errors', '1');
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
        $this->load->model('CommentModel');
        $this->load->model('TranscriptModel');
        $data['transcripts'] = $this->TranscriptModel->get_list('applicant_id',$id);
        $data['comments'] = $this->CommentModel->get_list('applicant_id',$id);
        $this->load->view('templates/header');
        $this->load->view('view_applicant',$data);
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
	}



    public function update($type,$id)
    {
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($id, array( $type => 'jjones', $type .'_date' => date('Y-m-d')));
        header( "Location: ".base_url() . "admin/get/".$id);
    }

    public function verify($id)
    {
//        var_dump($_POST);
        foreach($_POST as $item)
        {
            echo $mymodel = $item . 'Model';
            echo $type_id= $item . '_id';
            $this->load->model($mymodel);
            $type = $this->$mymodel->get_item('applicant_id', $id);
            $verify=$this->$mymodel->update($type->$type_id, array('verified' => 'jjones', 'verified_date' => date('Y-m-d')));

        }
//                    header( "Location: ".base_url() . "admin/index/".$id);
        redirect(base_url("admin/get/".$id));

    }
}
