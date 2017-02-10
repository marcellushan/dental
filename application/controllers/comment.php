<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

    public function post()
    {
        session_start();
        $this->load->model('ApplicantModel');
        $modelName = 'CommentModel';
        $this->load->model($modelName);
        $image = new $modelName();
        $image->applicant_id = $_SESSION['applicant_id'];
        $image_array = $_POST;
        $image_array['applicant_id'] = $_SESSION['applicant_id'];
        $image_array['submission_date'] = date('Y-m-d');
        $image->insert_post($image_array);
        redirect(base_url('admin/get/' . $_SESSION['applicant_id']));


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
        redirect(base_url('review/get'));

    }

    /**
     * display
     *
     * Displays the view that is sent as a parameter
     *
     * @param $page
     */
    public function display($id)
    {
        $data['id'] = $id;
        $this->load->view('templates/header');
        $this->load->view('comment', $data);
    }
	
	
}