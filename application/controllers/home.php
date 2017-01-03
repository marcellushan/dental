<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     *Present welcome screen to new and returning applicants
     */
    public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome');
	}

    /**
     * Create a new user in the system
     */
    public function createLogin()
	{
	    $this->load->view('templates/header');
	    $this->load->view('create_login');
	}

    /**
     * Allows an existing user to login to the system
     */
    public function login()
	{
	    $this->load->view('templates/header');
	    $this->load->view('returning/login');
	}


    /**
     * View existing personal information
     * @param int $applicant_type
     */
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

    /**
     * Display application sections to returning applicants
     */
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
                    $this->load->view('view_sections');
                } else {
                    $this->load->view('templates/header');
                }
            } else {
                $this->load->view('templates/header');
                $this->load->view('view_sections');
        
            }
             
             
        }

    /**
     * Update the applicant table with info stored in the $_POST array
     *
     * Display the $destination view
     *
     * @param string $destination
     */
    public function updateApplicant($destination)
    {
        session_start();
        // 	    var_dump($_POST);
        $this->load->model('ApplicantModel');
        $applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
        $this->load->view('templates/header');
        $this->load->view($destination);
    }

    /**
     * Display link to $imagetype
     * @param $imageType
     */
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

    /**
     * Upload image of $imagetype
     *
     * Display $nextpage view
     * @param string $imageType
     * @param string $nextPage
     */
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
        }
        $this->load->model('ApplicantModel');
        $modelName = $imageType . 'Model';
        $this->load->model($imageType . 'Model');
        $image = new $modelName();
        $image->applicant_id = $_SESSION['applicant_id'];
		$image_array = $_POST;
		(@$_FILES["fileToUpload"]["name"] ? $image_array['image'] = $image_url: $image_array['image'] = "No Image");
		$image_array['applicant_id'] = $_SESSION['applicant_id'];
        $image_array['submission_date'] = date('Y-m-d');
        var_dump($image_array);
        $image->insert_post($image_array);
    
        $this->load->view('templates/header');
        $this->load->view($nextPage, $data);
    }

    /**
     *Display school associated with applicant
     *
     */
    public function viewSchool()
	{
			session_start();
			$this->load->view('templates/header');
			$this->load->model('SchoolModel');
			$data['school'] = $this->SchoolModel->get_item('applicant_id', $_SESSION['applicant_id']);
			if($data['school']) {
				echo $_SESSION['school_id'] = $data['school']->school_id;
				echo $_SESSION['image'] = $data['school']->image;
				$this->load->view('returning/school', $data);
			} else {
				$this->load->model('StateModel');
				$data['states'] = $this->StateModel->get_states();
				$this->load->view('returning/new_school', $data);
			}
			$this->load->view('templates/footer');
	}

    /**
     * List all licenses
     */
    public function listLicenses()
	{
		session_start();
		$this->load->model('StateModel');
		$data['states'] = $this->StateModel->get_states();
		$this->load->view('templates/header');
		$this->load->model('LicenseModel');
		$data['licenses'] = $this->LicenseModel->get_list('applicant_id', $_SESSION['applicant_id']);
		// 		var_dump($data['licenses']);
		if($data['licenses']) {
			$this->load->view('returning/list_licenses', $data);
		} else {
			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
			$this->load->view('returning/new_license', $data);
		}
		$this->load->view('templates/footer');
	}

    /**
     * Display discipline if present
     */
    public function viewDiscipline()
	{
		session_start();
		$this->load->view('templates/header');
		$this->load->model('ApplicantModel');
		$applicant = new ApplicantModel();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
		echo "<pre>";
		echo "</pre>";
		$this->load->view('returning/discipline', $data);	
		$this->load->view('templates/footer');
	}

    /**
     * List employers
     */
    public function listEmployers()
	{
		session_start();
		$this->load->model('StateModel');
		$data['states'] = $this->StateModel->get_states();
		$this->load->view('templates/header');
		$this->load->model('EmployerModel');
		$data['employers'] = $this->EmployerModel->get_list('applicant_id', $_SESSION['applicant_id']);
		if($data['employers']) {
			$this->load->view('returning/list_employers', $data);
		} else {
			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
			$this->load->view('create_employer', $data);
		}
		$this->load->view('templates/footer');
	}

    /**
     * Display emergency contact
     */
    public function viewEmergency()
	{
		session_start();
		$this->load->model('ApplicantModel');
		$applicant = new ApplicantModel();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
		$this->load->model('stateModel');
		$data['states'] = $this->stateModel->get_states();
		$this->load->view('templates/header');
		$this->load->view('returning/emergency', $data);
		$this->load->view('templates/footer');
	}

    /**
     * Prompt for additional licenses or continue
     */
    public function moreLicenses()
    {
        $this->load->model('StateModel');
        $data['states'] = $this->StateModel->get_states();
        $this->load->view('templates/header');
        $this->load->view('create_license', $data);
    }

    /**
     * Create discipline
     */
    public function createDiscipline()
    {
        $this->load->view('templates/header');
        $this->load->view('discipline');
    }

    /**
     * Asks if employed
     */
    public function employed()
    {
        $this->load->view('templates/header');
        $this->load->view('employed');
    }

    /**
     * Prompt for employer info
     */
    public function employer()
    {
        $this->load->view('templates/header');
        $this->load->view('create_employer');
    }

    /**
     * Create new employer
     *
     * Ask if additional employers
     */
    public function createEmployer()
    {
         session_start();
        $this->load->model('EmployerModel');
		$employer = new EmployerModel();
		$employer->applicant_id = $_SESSION['applicant_id'];
		$employer->company = $_POST['company'];
		$employer->phone = $_POST['phone'];
		$employer->save();
		$this->load->view('templates/header');
        $this->load->view('more_employers');
    }

    /**
     * Create program info
     */
    public function createProgram()
    {
        $this->load->view('templates/header');
        $this->load->view('program');
    }

    /**
     * Display program info
     */
    public function viewProgram()
    {
    	session_start();
    	$this->load->model('ApplicantModel');
    	$applicant = new ApplicantModel();
    	$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
    	$this->load->view('templates/header');
    	$this->load->view('view_program',$data);
    	$this->load->view('templates/footer');
    }

    /**
     * Display demographic info
     */
    public function viewDemo()
    {
    	session_start();
    	$this->load->model('ApplicantModel');
    	$applicant = new ApplicantModel();
    	$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
    	$this->load->view('templates/header');
    	$this->load->view('view_demo',$data);
    	$this->load->view('templates/footer');
    }

    /**
     * Update image and submit date for $imageType
     *
     * @param $imageType
     */
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

    /**
     * Display CPR info
     */
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

    /**
     * Display applicant info for $id
     * @param $id
     */
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

    /**
     * List all applicants
     */
    public function listApplicants()
	{
	    $this->load->view('templates/header');
	    $this->load->model('ApplicantModel');
	    $data['applicants'] = $this->ApplicantModel->get();
	    // 		var_dump($data['applicants']);
	    $this->load->view('list_applicants',$data);
	}
	

	

	
	
	
	
	

	
	
}