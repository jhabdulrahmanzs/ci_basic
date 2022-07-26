<?php
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class CrudAjaxModel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	

	// insert
	function saveEmp($data){
		$result=$this->db->insert('emp',$data);
		return $result;
	}
 
	// Show 
	function employeeList(){
		$result=$this->db->get('emp');
		return $result->result();
	}	
	// update
	function updaterecords($id,$name,$email,$phone,$city)
	{
		$query="UPDATE crud
		SET name='$name',
		email='$email',
		phone='$phone',
		city='$city' WHERE id=$id";
		$this->db->query($query);
	}

}
