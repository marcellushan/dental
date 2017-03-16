<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employer extends CI_Controller {

    public function post($nextPage)
    {
        session_start();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->model('ApplicantModel');
        $modelName = 'EmployerModel';
        $this->load->model($modelName);
        $image = new $modelName();
        $image->applicant_id = $_SESSION['applicant_id'];
        $image_array = $_POST;
        $image_array['applicant_id'] = $_SESSION['applicant_id'];
        $image_array['submission_date'] = date('Y-m-d');
        $image->insert_post($image_array);
        if(! $nextPage) {
            redirect(base_url('employer/get'));
        } else {
            $this->load->view('templates/header');
            $this->load->view($nextPage, $data);
        }

    }

    /**
     * Retrieves information for the model sent by $type
     *
     * @param string $type Model name
     */
    public function get($id=0)
    {
        session_start();
        $modelName = 'EmployerModel';
        $this->load->model($modelName);
        $employer = new $modelName();
        $this->load->view('templates/header');
        if(! $id) {
            $data['employers'] = $employer->get_list('applicant_id', $_SESSION['applicant_id']);
            $this->load->view('list_employers', $data);
            $this->load->view('templates/footer');
        } else {
            $data['employer']= $employer->load($id);
            $this->load->view('edit_employer', $data);
        }
    }

    public function put()
    {
        session_start();
        $modelName = 'EmployerModel';
        $this->load->model($modelName);
        $applicant = new $modelName();
        $additional_id= 'employer_id';
        $additional_array = $_POST;
        $additional_array['submission_date'] = date('Y-m-d');
        $test= $applicant->get_item('applicant_id', $_SESSION['applicant_id']);
        $additional=$this->$modelName->update($test->$additional_id, $additional_array);
        redirect(base_url('employer/get'));

    }

	
	
}