<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employer extends CI_Controller {

    public function post($nextPage, $type=0)
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
        if($type) {
            redirect(base_url('review/get'));
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
    public function get($type=0)
    {
        session_start();
        $modelName = 'EmployerModel';
        $this->load->model($modelName);
        $image = new $modelName();
        $data['employer']= $image->get_item('applicant_id', $_SESSION['applicant_id']);
//        var_dump($data[$type]);
//        echo $data->submission_date;
        $this->load->view('templates/header');
        ($type? $this->load->view('edit/new_employer') :$this->load->view('edit/employer', $data));
    }

    public function put($type)
    {
        session_start();
        $modelName = 'EmployerModel';
        $this->load->model($modelName);
        $applicant = new $modelName();
        $additional_id= 'employer_id';
        $additional_array = $_POST;
        $additional_array['submission_date'] = date('Y-m-d');
        $test= $applicant->get_item('applicant_id', $_SESSION['applicant_id']);
//        var_dump($additional_array);
        $additional=$this->$modelName->update($test->$additional_id, $additional_array);
        redirect(base_url('returning/get'));

    }

	
	
}