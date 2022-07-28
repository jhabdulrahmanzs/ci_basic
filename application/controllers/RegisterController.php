<?php
class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model('RegisterModel');
    }

    public function index()
    {
        $this->load->view('register');
    }

    // insert records

    public function insertdata()
    {

        if ($this->input->post('savedata')) {
                $this->form_validation->set_rules('first_name', 'Firstname', 'trim|required|alpha');
                $this->form_validation->set_rules('last_name', 'Lastname', 'trim|required|alpha');
                $this->form_validation->set_rules('user_email', 'Useremail', 'trim|required|valid_email|is_unique[register.useremail]');
                $this->form_validation->set_rules('user_phone', 'Userphone', 'trim|required');
                $this->form_validation->set_rules('user_pwd', 'Password', 'trim|required');
                if ($this->form_validation->run() == FALSE) {
              
                $this->index();
            }
             else {
                $data=array(
                'firstname' => $this->input->post('first_name'),
                'lastname' =>  $this->input->post('last_name'),
                'useremail' => $this->input->post('user_email'),
                'phone'=>$this->input->post('user_phone'),
                'password'=>$this->input->post('user_pwd')
                );
                $regiseter= new RegisterModel;
                $check=$regiseter->saverecords($data);
                if($check)
                {
                    $this->session->set_flashdata('status','registered successfully!! Go to Login');
                    redirect(base_url('login'));
                }
                else
                {
                    $this->session->set_flashdata('status','registered failed!!!');
                    redirect(base_url('register'));
                }
            }
        }
    }
    // Display records 
    public function displaydata()
    {
        $result['data'] = $this->RegisterModel->getrecords();
        $this->load->view('displaydata', $result);
    }

    // update records

    public function updatedata()
    {
        $id = $this->input->get('id');
        $result['data'] = $this->RegisterModel->displayrecordsbyid($id);
        $this->load->view('updaterecords', $result);
        if ($this->input->post('update')) {
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $useremail = $this->input->post('user_email');
            $phonenumber=$this->input->post('user_phone');
            $array = array(
                'firstname' => $first_name,
                'lastname' => $last_name,
                'useremail' => $useremail,
                'phone'=>$phonenumber
        );
            $this->RegisterModel->updaterecords($array,$id);
            return redirect('crud/displaydata');
            // if( $updated == true){
            //     // echo "Date updated Successfully";
            //     redirect('crud/displaydata');
            // }
            // else {
            //     echo "update failed";
            // }
        }
    }

    // delete records 
    public function deletedata()
    {
        $id = $this->input->get('id');
        $response = $this->RegisterModel->deleterecords($id);
        if ($response == true) {
            echo "Record Deleted Successfully!";
            redirect('crud/displaydata');
        } else {
            echo "Error!";
        }
    }
}
