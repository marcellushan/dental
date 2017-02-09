<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {

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
     * @param string $type
     * @param string $nextPage
     */
    public function post($type, $nextPage)
    {
        session_start();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        if (!@$_FILES['fileToUpload']['error']) {
            $myRandom = rand(1, 10000);
            ($_SERVER['SERVER_NAME'] == 'localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/" : $target_dir = "/var/www/html/dental/assets/uploads/");
            $target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
            $myFile = basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $image_url = base_url() . "assets/uploads/" . $myRandom . basename($_FILES["fileToUpload"]["name"]);
        }
        $this->load->model('ApplicantModel');
        $modelName = $type . 'model';
        $this->load->model($modelName);
        $image = new $modelName();
        $image->applicant_id = $_SESSION['applicant_id'];
        $image_array = $_POST;
        (@$_FILES["fileToUpload"]["name"] ? $image_array['image'] = $image_url : $image_array['image'] = "No Image");
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
        $this->load->view('templates/header');
//        ($type== 'license' ? $data['licenses']= $image->get_list('applicant_id', $_SESSION['applicant_id']) : $data[$type]= $image->get_item('applicant_id', $_SESSION['applicant_id']));
        if($type== 'license') {
            $data['licenses']= $image->get_list('applicant_id', $_SESSION['applicant_id']);
            $this->load->view('edit/list_licenses', $data);
        } else {
            $data[$type]= $image->get_item('applicant_id', $_SESSION['applicant_id']);
            $this->load->view('edit/' . $type, $data);
        }
    }

    public function put($type, $id)
    {
        if (!@$_FILES['fileToUpload']['error']) {
            $myRandom = rand(1, 10000);
            ($_SERVER['SERVER_NAME'] == 'localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/" : $target_dir = "/var/www/html/dental/assets/uploads/");
            $target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
            $myFile = basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            echo $image_url = base_url() . "assets/uploads/" . $myRandom . basename($_FILES["fileToUpload"]["name"]);

        }
       $modelName = $type . 'model';
        $this->load->model($modelName);
        (@$image_url ? $image_array['image'] = $image_url : $image_array['image'] = "No Image");
        $image_array['submission_date'] = date('Y-m-d');
        $image=$this->$modelName->update($id, $image_array);
//        redirect(base_url('review/get'));

            }



	
	
}