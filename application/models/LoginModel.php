<?php
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class LoginModel extends CI_Model {
	public function login($data)
    {
        $query=$this->db->get('register',$data);

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
