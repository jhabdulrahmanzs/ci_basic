<?php
class Crud extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->model('CrudModel');

    }

    public function index(){
        $this->load->view('register');
        

    }

    // insert records

    public function insertdata(){

        if($this->input->post('savedata')) {
            $data['first_name']=$this->input->post('first_name');
            $data['last_name']=$this->input->post('last_name');
            $data['email']=$this->input->post('email');
            $response = $this->CrudModel->saverecords($data);
            if($response==true){
            //  echo "record inserted successfully!";
            redirect('/crud');
            }
            else {
             echo "Insert error!";
            }
        }      
  
    }
      // Display records 
      public function displaydata(){
        $result['data']=$this->CrudModel->getrecords();
        $this->load->view('displaydata', $result);
    } 

    // update records

    public function updatedata(){
            $id = $this->input->get('id');
            $result['data']=$this->CrudModel->displayrecordsbyid($id);
            $this->load->view('updaterecords',$result);
            if($this->input->post('update')){
                $first_name =$this->input->post('first_name');
                $last_name =$this->input->post('last_name');
                $updated = $email =$this->input->post('email');
                $this->CrudModel->updaterecords($first_name, $last_name, $email, $id);
                
                if( $updated == true){
                    // echo "Date updated Successfully";
                    redirect('crud/displaydata');
                }
                else {
                    echo "update failed";
                }
            }

    }

    // delete records 
    public function deletedata(){
        $id= $this->input->get('id');
        $response= $this->CrudModel->deleterecords($id);
        if($response== true){
            // echo "Record Deleted Successfully!";
            redirect('crud/displaydata');

        }
        else{
            echo "Error!";
        }
    }


}

?>