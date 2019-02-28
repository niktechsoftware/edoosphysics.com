<?php
class Registration extends CI_Controller
{
	public function index()
	{
		$data= array(
            'name'=>$this->input->post('name'),
            'mobile'=>$this->input->post('mobile'),
            'email'=>$this->input->post('email')
            
        );
        $this->db->insert('sturegistration',$data);
        echo "<script>alert('Successfully Registration');</script>";
        redirect('/welcome/index', 'refresh');
	}
}