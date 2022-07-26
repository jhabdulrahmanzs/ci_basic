<?php 

class CrudAjax extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('CrudAjaxModel');

    }
	function index(){
		$this->load->view('listEmp');
	}
	
	// create

	function save(){
		$data = array(				
			'name' 		=> $this->input->post('name'), 
			'email' 	=> $this->input->post('email'), 
			'phone' 	=> $this->input->post('phone'), 
			'city' 		=> $this->input->post('city'), 
		);
		$data=$this->CrudAjaxModel->saveEmp($data);
		echo json_encode($data);
	}


	// read
	public function show()
	{
				$this->load->view('listRecords');
	}

	public function get(){
		
		$data=$this->CrudAjaxModel->employeeList();
		$res=array(
			'data' => $data
		);
		echo json_encode($data);

	}

	function updaterecords()
	{
		if($this->input->post('type')==3)
		{
			$id=$this->input->post('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$city=$this->input->post('city');
			$this-> CrudAjaxModel->updaterecords($id,$name,$email,$phone,$city);
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}

	public function edit($id)
   {
       $this->load->database();
       $q = $this->db->get_where('emp', array('id' => $id));
       echo json_encode($q->row());
   }


   public function update($id)
   {
		
       $this->load->database();
       $insert = $this->input->post();
       $this->db->where('id', $id);
       $this->db->update('emp', $insert);
       $q = $this->db->get_where('emp', array('id' => $id));
       echo json_encode($insert);
    }



}
?>