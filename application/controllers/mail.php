<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller
{

    public function index($id)
    {
        $this->load->model('ApplicantModel');
        $data['applicant'] = $this->ApplicantModel->load($id);
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

        echo "<pre>";
        print_r($data);
        echo "</pre>";
//        $this->load->view('templates/header');
//        $this->load->view('view_applicant',$data);
    }


}