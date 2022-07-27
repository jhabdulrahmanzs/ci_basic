<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class RegisterModel extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('register',$data);
        return true;
	}

    function getrecords(){
        $query =$this->db->get('register');
        return $query->result();
    }

    // function displayrecords(){
    //    $query =$this->db->get('register');
    //     return $query-> result();
    // }

    function displayrecordsbyid($id){
        $query =$this->db->get_where('register', array('id' => $id));
        return $query-> result();

    }

    function updaterecords($first_name,$last_name,$email,$id){
        $array = array(
            'firstname' => $first_name,
            'lastname' => $last_name,
            'email' => $email
    );
    
    $this->db->set($array);
    $this->db->where('id', $id);
    $this->db->update('register');
        


    }

    function deleterecords($id){
        $this->db->where('id', $id);
        $this->db->delete('register');
        return true;
    } 
	
}