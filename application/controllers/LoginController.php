<?php

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->load->model('LoginModel');
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function main()
    {


        $this->load->view('main');
    }
    public function login_valid()
    {

        $this->form_validation->set_rules('useremail', 'Useremail', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $useremail = $this->input->post('useremail');
            $password = $this->input->post('password');
            if ($this->LoginModel->login($useremail, $password)) {
                $session_data = array(
                    'useremail' => $useremail
                );
                $this->session->set_userdata($session_data);
                echo "success";
                redirect('crud/displaydata');
            }
            else
            {
                echo "checking data has an issues";
                redirect('login');
            }
        }
    }
}
