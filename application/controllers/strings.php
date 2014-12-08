<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Strings extends CI_Controller {

	public function index()
	{
		if(! isset($this->session->userdata['word']))
		{
			$this->session->set_userdata('attempt', 1);
			$this->session->set_userdata('word', "");
		}
		
		$this->load->view('word');
	}

	public function randomize()
	{
	 	$length = 14;
		$alpha_numeric = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$random_word = substr(str_shuffle($alpha_numeric), 0, $length);
		$this->session->set_userdata('word', $random_word);
		$attempt = $this->session->userdata['attempt'] + 1;
		$this->session->set_userdata('attempt', $attempt);
		
		redirect(base_url());
	}

	// public function display()
	// {
	// 	$this->load->view('word');
	// }


}
