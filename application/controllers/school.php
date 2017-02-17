<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School extends CI_Controller {

    public function post($nextPage)
    {
        session_start();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->model('ApplicantModel');
        $modelName = 'SchoolModel';
        $this->load->model($modelName);
        $image = new $modelName();
        $image->applicant_id = $_SESSION['applicant_id'];
        $image_array = $_POST;
        $image_array['applicant_id'] = $_SESSION['applicant_id'];
        $image_array['submission_date'] = date('Y-m-d');
//        var_dump($image_array);
        $image->insert_post($image_array);

        $this->load->view('templates/header');
        $this->load->view($nextPage, $data);
    }

    /**
     * Retrieves information for the model sent by $type
     *
     * @param string $type Model name
     */
    public function get()
    {
        session_start();
        $modelName = 'SchoolModel';;
        $this->load->model($modelName);
        $image = new $modelName();
        $data['school']= $image->get_item('applicant_id', $_SESSION['applicant_id']);
//        var_dump($data['school']);
//        echo $data->submission_date;
        $this->load->view('templates/header');
        $this->load->view('edit/school', $data);
    }

    public function put()
    {
        session_start();
        $modelName = 'Schoolmodel';
        $this->load->model($modelName);
        $applicant = new $modelName();
        $additional_id= 'school_id';
        $additional_array = $_POST;
        $additional_array['submission_date'] = date('Y-m-d');
        $test= $applicant->get_item('applicant_id', $_SESSION['applicant_id']);
        var_dump($additional_array);
        $additional=$this->$modelName->update($test->$additional_id, $additional_array);
        redirect(base_url('returning/get'));

    }

	
	
}