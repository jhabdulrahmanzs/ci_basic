<?php
class RegisterController extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

        $this->load->model('RegisterModel');

    }

    public function index(){
        $this->load->view('register');
        

    }

    // insert records

    public function insertdata(){

        if($this->input->post('savedata')) {
            $data['firstname']=$this->input->post('first_name');
            $data['lastname']=$this->input->post('last_name');
            $data['useremail']=$this->input->post('user_email');
            $data['phone']=$this->input->post('user_phone');
            $data['password']=$this->input->post('user_pwd');
            $response = $this->RegisterModel->saverecords($data);
            if($response==true){
             echo "record inserted successfully!";
            redirect(base_url('crud/displaydata'));
            }
            else {
             echo "Insert error!";
            }
        }      
  
    }
      // Display records 
      public function displaydata(){
        $result['data']=$this->RegisterModel->getrecords();
        $this->load->view('displaydata', $result);
    } 

    // update records

    public function updatedata(){
            $id = $this->input->get('id');
            $result['data']=$this->RegisterModel->displayrecordsbyid($id);
            $this->load->view('updaterecords',$result);
            if($this->input->post('update')){
                $first_name =$this->input->post('first_name');
                $last_name =$this->input->post('last_name');
                $email =$this->input->post('email');
                $this->RegisterModel->updaterecords($first_name, $last_name, $email, $id);               
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
    public function deletedata(){
        $id= $this->input->get('id');
        $response= $this->RegisterModel->deleterecords($id);
        if($response== true){
            echo "Record Deleted Successfully!";
            redirect('crud/displaydata');

        }
        else{
            echo "Error!";
        }
    }


}

?>