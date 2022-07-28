<?php
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class LoginModel extends CI_Model {
	public function login($useremail,$password)
    {
        $this->db->where('useremail',$useremail);
        $this->db->where('password',$password); 

        $query=$this->db->get('register');

        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
