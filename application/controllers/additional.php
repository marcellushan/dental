<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Additional extends CI_Controller {

    public function post($type, $nextPage)
    {
        session_start();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->model('ApplicantModel');
        $modelName = $type . 'model';
        $this->load->model($modelName);
        $image = new $modelName();
        $image->applicant_id = $_SESSION['applicant_id'];
        $image_array = $_POST;
        $image_array['applicant_id'] = $_SESSION['applicant_id'];
        $image_array['submission_date'] = date('Y-m-d');
        $image->insert_post($image_array);

        $this->load->view('templates/header');
        $this->load->view($nextPage, $data);
    }

    /**
     * Retrieves information for the model sent by $type
     *
     * @param string $type Model name
     */
    public function get($type)
    {
        session_start();
        $modelName = $type . 'model';
        $this->load->model($modelName);
        $image = new $modelName();
        $data[$type]= $image->get_item('applicant_id', $_SESSION['applicant_id']);
//        var_dump($data[$type]);
//        echo $data->submission_date;
        $this->load->view('templates/header');
        $this->load->view('edit/' . $type, $data);
    }
	

	
	
}