<?php


$config = array(
    'home/new_applicant' => array(
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
    	
    ),
	'home/existingPersonal' => array(
			array (
					'field' => 'email',
					'label' => 'Email Address',
					'rules' => 'required|valid_email'
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