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
            }
         else {
            $data=array(

                'useremail' => $this->input->post('user_email'),        
                'password'=>$this->input->post('user_pwd')
                );
                $login= new LoginModel;
                $check=$login->login($data);
                if($check)
                {
                    $this->session->set_flashdata('status','registered successfully!! Go to Login');
                    redirect(base_url('crud/displaydata'));
                }
                else
                {
                    $this->session->set_flashdata('status','registered failed!!!');
                    redirect(base_url('login'));
                }
        }
    }
}
