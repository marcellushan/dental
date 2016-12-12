<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myload extends CI_Controller {
	public function index()
	{
		$this->load->model('test');
		$data = $this->test->get_test();
	}
}
	