<?php


$config = array(
//     'NewApplicant/createApplication' => array(
//     	array (
// 	        'field' => 'email',
// 	        'label' => 'Email Address',
// 	        'rules' => 'required|valid_email|is_unique[applicant.preferred_email]'
// 	    ),
//     	array (
//     		'field' => 'password',
//     		'label' => 'Password',
//     		'rules' => 'required'
//     		),
//     	array (
//     		'field' => 'passconf',
//     		'label' => 'Password Confirmation',
//     		'rules' => 'required|matches[password]'
//     		)
    	
//     ),
	'NewApplicant/identification' => array(
			array (
					'field' => 'first_name',
					'label' => 'First Name',
					'rules' => 'required'
			),
	        array (
	                'field' => 'last_name',
	                'label' => 'Last Name',
	                'rules' => 'required'
	        ),
	        array (
	                'field' => 'middle_name',
	                'label' => 'Middle Name',
	                'rules' => ''
	        ),
	        array (
	                'field' => 'birth_date',
	                'label' => 'Birth Date',
	                'rules' => 'required'
	        )
			 
	),
     'home/createApplication' => array(
            array (
                    'field' => 'email',
                    'label' => 'Email Address',
                    'rules' => 'required|valid_email'
            ),
             array (
                     'field' => 'password',
                     'label' => 'Password',
                     'rules' => 'required'
             ),
             array (
                    'field' => 'passconf',
                    'label' => 'Password Confirmation',
                    'rules' => 'required|matches[password]'
    		)
    
    )
);