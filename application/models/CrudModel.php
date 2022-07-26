<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class CrudModel extends CI_Model 
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

    function displayrecords(){
        $query = $this->db->query('select * from register');
        return $query-> result();
    }

    function displayrecordsbyid($id){
        $query = $this->db->query("select * from register where id='".$id."'");
        return $query-> result();

    }

    function updaterecords($first_name,$last_name,$email,$id){
        $query = $this->db->query("update register SET first_name='$first_name',last_name='$last_name',email='$email' where id='$id'");
        


    }

    function deleterecords($id){
        // $this->db->where("id",$id);
        // $this->db->delete('register');
        $query =$this->db->query("delete from register where id=".$id);
        return true;
    } 
	
}