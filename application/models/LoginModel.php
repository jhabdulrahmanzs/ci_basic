<?php
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class LoginModel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}
