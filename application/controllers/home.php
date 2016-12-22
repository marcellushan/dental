<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome');
	}
	
    public function createLogin()
	{
	    $this->load->view('templates/header');
	    $this->load->view('create_login');
	}
	
	public function login()
	{
	    $this->load->view('templates/header');
	    $this->load->view('returning/login');
	}
	
	
	
	public function viewPersonal($applicant_type=0 )
	{
	    session_start();
	    ($applicant_type ? $_SESSION["applicant_type"] = 'returning' : $_SESSION["applicant_type"] = 'new');
	    $this->load->model('ApplicantModel');
	    $applicant = new ApplicantModel();
	    $this->load->model('StateModel');
	    $data['states'] = $this->StateModel->get_states();
	    $this->load->view('templates/header');
	    if($_SESSION["applicant_type"] == 'returning') {
	        $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
	        $this->load->view('update_personal', $data);
	        $this->load->view('templates/footer');
	    } else {
	        $applicant->application_date = date('Y-m-d');
	        $applicant->preferred_email = $_POST['email'];
	        $applicant->password = $_POST['password'];
	        $applicant->save();
	        $_SESSION['applicant_id'] = $applicant->applicant_id;
	        $data['applicant'] = $applicant->load($_SESSION['applicant_id']);
	        $this->load->view('create_personal', $data);
	    }
	}

        public function viewSections()
        {
            session_start();
            if(@$_POST['email']) {
                $this->load->model('ApplicantModel');
                $applicant = new ApplicantModel();
                $returning_app= $applicant->get_login('preferred_email', $_POST['email'], $_POST['password']);
                if(@$returning_app) {
                    $_SESSION['applicant_id'] = $returning_app->applicant_id;
                    $this->load->view('templates/header');
                    $this->load->view('viewSections');
                } else {
                    $this->load->view('templates/header');
                }
            } else {
                $this->load->view('templates/header');
                $this->load->view('viewSections');
        
            }
             
             
        }
	     
    public function updateApplicant($destination)
    {
        session_start();
        // 	    var_dump($_POST);
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
        $this->load->view('templates/header');
        $this->load->view($destination);
    }
    
    public function viewImage($imageType)
    {
        session_start();
        $upperImage = ucfirst($imageType);
        $lowerImage = lcfirst($imageType);
        $imageModel = $upperImage . 'Model';
        $image_id = $lowerImage . '_id';
        $this->load->model($upperImage . 'Model');
        $data[$lowerImage]=$this->$imageModel->get_item('applicant_id', $_SESSION['applicant_id']);
        if($data[$lowerImage]) {
            $_SESSION[$lowerImage . '_id'] = $data[$lowerImage]->$image_id;
        }
        $this->load->view('templates/header');
        $this->load->view('returning/' . $lowerImage,$data);
        $this->load->view('templates/footer');
    
    }
    
    public function createImage($imageType, $nextPage)
    {
        session_start();
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        if(!@$_FILES['fileToUpload']['error']) {
    
            $myRandom = rand(1, 10000);
            // 			($servername=='localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/printing/uploads/" : $target_dir = "/var/www/html/printing/uploads/");
            $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/";
            // webdev
            // 	$target_dir = "/var/www/html/dental/assets/uploads/";
            $target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
            $myFile = basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $image_url = base_url() . "assets/uploads/" .  $myRandom . basename($_FILES["fileToUpload"]["name"]);
            $this->load->model('ApplicantModel');
            // 			$data = array('driver' => $image_url);
            $modelName = $imageType . 'Model';
            $this->load->model($imageType . 'Model');
            $image = new $modelName();
            $image->applicant_id = $_SESSION['applicant_id'];
            ($imageType == 'cpr' ? $image->expiration_date = $_POST['expiration_date'] :"");
            ($imageType == 'license' ? $image->state = $_POST['state'] :"");
            ($imageType == 'license' ? $image->active = @$_POST['active'] :"");
            ($imageType == 'license' ? $image->number = $_POST['number'] :"");
            $image->submission_date = date('Y-m-d');
            $image->image = $image_url;
            			var_dump($_POST);
            $image->save();
        }
    
        $this->load->view('templates/header');
        $this->load->view($nextPage, $data);
    }
    
    public function moreLicenses()
    {
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        $this->load->view('create_license', $data);
    }
    
    public function createDiscipline()
    {
        $this->load->view('templates/header');
        $this->load->view('discipline');
    }
    
    public function employed()
    {
        $this->load->view('templates/header');
        $this->load->view('employed');
    }
    
    public function employer()
    {
        $this->load->view('templates/header');
        $this->load->view('create_employer');
    }
    
//     public function createEmployer()
//     {
//         $this->load->view('templates/header');
//         $this->load->view('create_employer');
//     }
    
    public function createEmployer()
    {
         session_start();
//      $this->load->helper(array('form', 'url'));
//       $this->load->library('form_validation');
        $this->load->model('EmployerModel');
		$employer = new EmployerModel();
		$employer->applicant_id = $_SESSION['applicant_id'];
		$employer->company = $_POST['company'];
		$employer->phone = $_POST['phone'];
		$employer->save();
		$this->load->view('templates/header');
        $this->load->view('more_employers');
    }
    
    public function program()
    {
        $this->load->view('templates/header');
        $this->load->view('program');
    }
    
    public function updateImage($imageType)
    {
        session_start();
        if(!@$_FILES['fileToUpload']['error']) {
            $myRandom = rand(1, 10000);
            // 			($servername=='localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/printing/uploads/" : $target_dir = "/var/www/html/printing/uploads/");
            $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/";
            // webdev
            // 	$target_dir = "/var/www/html/dental/assets/uploads/";
            $target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
            $myFile = basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $image_url = base_url() . "assets/uploads/" .  $myRandom . basename($_FILES["fileToUpload"]["name"]);
        }
        $this->load->model('IdentificationModel');
        if(@$_SESSION['identification_id']) {
            $applicant=$this->IdentificationModel->update($_SESSION['identification_id'],
                    array('image' => $image_url,'submission_date' => date('Y-m-d')));
        } else {
            $identification = new IdentificationModel();
            $identification->applicant_id = $_SESSION['applicant_id'];
            $identification->submission_date = date('Y-m-d');
            $identification->image = $image_url;
            $identification->save();
        }
    
        $this->load->view('templates/header');
        $this->load->view('viewSections');
    }
    
    public function viewCpr()
    {
    
        session_start();
        $this->load->model('CprModel');
        $data['cpr']=$this->CprModel->get_item('applicant_id', $_SESSION['applicant_id']);
        $_SESSION['cpr_id'] = $data['cpr']->cpr_id;
        $this->load->view('templates/header');
        $this->load->view('returning/cpr',$data);
        $this->load->view('templates/footer');
    }
	
	public function viewApplicant($id)
	{
	    $this->load->model('ApplicantModel');
	    $data['applicant'] = $this->ApplicantModel->load($id);
	    $this->load->model('EmployerModel');
	    $data['employers'] = $this->EmployerModel->get_list('applicant_id',$id);
	    $this->load->model('LicenseModel');
	    $data['licenses'] = $this->LicenseModel->get_list('applicant_id',$id);
	    $this->load->model('SchoolModel');
	    $data['school'] = $this->SchoolModel->get_item('applicant_id',$id);
	    $this->load->model('IdentificationModel');
	    $data['identification'] = $this->IdentificationModel->get_item('applicant_id',$id);
	    $date = new DateTime($data['identification']->submission_date);
	    $data['identification']->submission_date = $date->format('F d, Y');
	    $this->load->model('CprModel');
	    $data['cpr'] = $this->CprModel->get_item('applicant_id',$id);
	    $date = new DateTime($data['cpr']->submission_date);
	    $data['cpr']->submission_date = $date->format('F d, Y');
	    $date = new DateTime($data['cpr']->expiration_date);
	    $data['cpr']->expiration_date = $date->format('F d, Y');
	    $this->load->view('templates/header');
	    $this->load->view('view_applicant',$data);
	}
	
	public function listApplicants()
	{
	    $this->load->view('templates/header');
	    $this->load->model('ApplicantModel');
	    $data['applicants'] = $this->ApplicantModel->get();
	    // 		var_dump($data['applicants']);
	    $this->load->view('list_applicants',$data);
	}
	

	

	
	
	
	
	

	
	
}