<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Additional extends CI_Controller {

    /**
     *Present welcome screen to new and returning applicants
     */

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('create_login');
    }

    /**
     * Upload image of $imagetype
     *
     * Display $nextpage view
     * @param string $imageType
     * @param string $nextPage
     */
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
	
	
	

	
	
}