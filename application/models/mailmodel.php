<?php

class MailModel extends CI_Model {

    public function send($email, $first, $last)
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from('webmaster@highlands.edu', 'Georgia Highlands College');
        $this->email->to($email);
        $body = "<h1>Hello " . $first ." " . $last . "</h1>";
        $body = $body . "<h2>Thank you for your interest in the Dental Hygiene Program at Georgia Highlands College.</h2>";
        $body = $body . "<h2>Your application has been received and you will be notified as soon as a decision is made.</h2>";
        $body = $body . "<h2>Feel free to use this <a href='" . base_url('/home/display/login') . "'>link</a> to check the status of your application</h2>";
        $this->email->subject('Your Application to the Georgia Highlands Dental Hygiene School has been received');
        $this->email->message($body);

        $this->email->send();
    }

    public function complete($email, $first, $last)
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from('webmaster@highlands.edu', 'Georgia Highlands College');
        $this->email->to($email);
        $body = "<h1>Hello " . $first ." " . $last . "</h1>";
        $body = $body . "<h2>Thank you for your interest in the Dental Hygiene Program at Georgia Highlands College.</h2>";
        $body = $body . "<h2>All necessary documentation has been received to consider you application</h2>";
        $body = $body . "<h2>Feel free to use this <a href='" . base_url('/home/display/login') . "'>link</a> to check the status of your application</h2>";
        $this->email->subject('All documentation for your Georgia Highlands Dental Hygiene School application has been received');
        $this->email->message($body);

        $this->email->send();
    }

    public function funds($email, $first, $last)
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from('webmaster@highlands.edu', 'Georgia Highlands College');
        $this->email->to($email);
        $body = "<h1>Hello " . $first ." " . $last . "</h1>";
        $body = $body . "<h2>Thank you for your interest in the Dental Hygiene Program at Georgia Highlands College.</h2>";
        $body = $body . "<h2>The fee necessary to process your application has been received.</h2>";
        $body = $body . "<h2>Feel free to use this <a href='" . base_url('/home/display/login') . "'>link</a> to check the status of your application</h2>";
        $this->email->subject('Your Application fee to the Georgia Highlands Dental Hygiene School has been received');
        $this->email->message($body);

        $this->email->send();
    }

    public function comment($email, $first, $last)
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->email->from('webmaster@highlands.edu', 'Georgia Highlands College');
        $this->email->to($email);
        $body = "<h1>Hello " . $first ." " . $last . "</h1>";
        $body = $body . "<h2>Thank you for your interest in the Dental Hygiene Program at Georgia Highlands College.</h2>";
        $body = $body . "<h2>Your application has been received and you will be notified as soon as a decision is made.</h2>";
        $body = $body . "<h2>Feel free to use this <a href='" . base_url('/home/display/login') . "'>link</a> to check the status of your application</h2>";
        $this->email->subject('Your Application to the Georgia Highlands Dental Hygiene School has been received');
        $this->email->message($body);

        $this->email->send();
    }

}