<?php
class ApanelForms extends CI_Controller{

   

public function deleteCareer(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("query_table")){

			redirect(base_url()."apanel/");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
}