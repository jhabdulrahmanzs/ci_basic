<?php 

class LoginController extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('form','url'));

		$this->load->library('form_validation');

        // $this->load->model('LoginModel');

    }

    public function index(){
        $this->load->view('login');
        

    }

    

}