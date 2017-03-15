<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	

	
	public function index($type=0)
	{
		$this->load->view('templates/header');
		$this->load->model('ApplicantModel');
        $data['type'] = $type;
        ($type ? $data['applicants'] = $this->ApplicantModel->get_category($type) : $data['applicants'] = $this->ApplicantModel->get());
        $this->load->view('applications',$data);

	}

    /**
     * display
     *
     * Displays the view that is sent as a parameter
     *
     * @param $page
     */
    public function display($page="", $id=0)
    {
        $data['id'] = $id;
        $this->load->view('templates/header');
        $this->load->view($page, $data);
    }

	public function get($id)
    {
        ini_set('display_errors', '1');
        $this->load->model('ApplicantModel');
        $data['applicant'] = $this->ApplicantModel->load($id);
        if($data['applicant']->cpr_verified && $data['applicant']->identification_verified)
        {
            $data['verified']=1;
        }
        $this->load->model('RaceModel');
        $data['race']= $this->RaceModel->load($data['applicant']->race);
        $this->load->model('EmployerModel');
        $data['employers'] = $this->EmployerModel->get_list('applicant_id',$id);
        $this->load->model('LicenseModel');
        $data['licenses'] = $this->LicenseModel->get_list('applicant_id',$id);
        $this->load->model('CommentModel');
        $data['comments'] = $this->CommentModel->get_list('applicant_id',$id);
        $this->load->model('TranscriptModel');
        $data['transcripts'] = $this->TranscriptModel->get_list('applicant_id',$id);
        $this->load->view('templates/header');
        $this->load->view('view_applicant',$data);
    }

    public function put($id)
    {
        session_start();
        $this->load->model('ApplicantModel');
        (@$_POST? $applicant=$this->ApplicantModel->update($id, $_POST):"");
        redirect(base_url('admin/get/' . $id));
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
        $applicant=$this->ApplicantModel->update($id, array( $type => 1, $type. '_by' => 'jjones', $type .'_date' => date('Y-m-d')));
        $applicant=$this->ApplicantModel->load($id);
        $this->load->model('MailModel');
//        $this->MailModel->submit($applicant->preferred_email, $applicant->first_name, $applicant->last_name);
        $this->MailModel->$type($applicant->preferred_email, $applicant->first_name, $applicant->last_name);

        header( "Location: ".base_url() . "admin/get/".$id);
    }

//    public function verify($id)
//    {
////        var_dump($_POST);
//        foreach($_POST as $item)
//        {
//            echo $mymodel = $item . 'Model';
//            echo $type_id= $item . '_id';
//            $this->load->model($mymodel);
//            $type = $this->$mymodel->get_item('applicant_id', $id);
//            $verify=$this->$mymodel->update($type->$type_id, array('verified' => 'jjones', 'verified_date' => date('Y-m-d')));
//
//        }
////                    header( "Location: ".base_url() . "admin/index/".$id);
//        redirect(base_url("admin/get/".$id));
//
//    }

    public function verify($type, $id)
    {
        session_start();
        $this->load->model('ApplicantModel');
        $verify = new ApplicantModel();
        $data['applicant']= $verify->load($id);
        $this->load->view('templates/header');
        $this->load->view($type . '_verify', $data);
    }

}
