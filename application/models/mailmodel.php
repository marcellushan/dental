<?php

class MailModel extends CI_Model {

    public function send($email, $first, $last)
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from('webmaster@highlands.edu', 'Georgia Highlands College');
        $this->email->to($email);
        $body = "<h1>Thank you " . $first . $last . "</h1>";

        $this->email->subject('Your Application to the Georgia Highlands Dental Hygiene School has been received');
        $this->email->message($body);

        $this->email->send();
    }



}