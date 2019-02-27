<?php 
class Query extends CI_Controller
{
    public function index()
    {
        $data= array(
            'name'=>$this->input->post('name'),
            'mobile'=>$this->input->post('mno'),
            'email'=>$this->input->post('email'),
            'query'=>$this->input->post('query'),
            
        );
        $this->db->insert('query_table',$data);
        echo "<script>alert('Your Query Submitted Successfully');</script>";
        redirect('/welcome/index', 'refresh');
    }
}
