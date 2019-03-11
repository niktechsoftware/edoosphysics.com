<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home_page');
	}
	
	public function about()
	{
	    $this->load->view('about');
	}
	
	public function blog()
	{
	    $this->load->view('blog');
	}
	
	public function services()
	{
	    $this->load->view('services');
	}
	
	public function placement()
	{
	    $this->load->view('stats');
	}
	
	public function team()
	{
	    $this->load->view('team');
	}
	
	public function contact()
	{
	    $this->load->view('contact');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */