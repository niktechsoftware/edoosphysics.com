<?php
class Apanel extends CI_Controller{
	
function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}
	
	function isLogin(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."login/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."login/lockPage");
		}
	}
		
	public function contact(){
		$data['title'] = "Enquiry";
		$data['smallTitle'] = "Enquiry List";
		$data['bigTitle'] = "Enquiry List";
		$data['body'] = "admin/contact";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}

	public function stureg(){
		$data['title'] = "Students Registration";
		$data['smallTitle'] = "Registration List";
		$data['bigTitle'] = "Registration List";
		$data['body'] = "admin/stureg";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}

	public function index(){
		$data['title'] = "dashboard";
		$data['smallTitle'] = "dashboard";
		$data['bigTitle'] = "dashboard";
		$data['body'] = "admin/dashboard";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
}