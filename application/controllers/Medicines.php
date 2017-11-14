<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicines extends CI_Controller {
	function __Construct(){
				parent::__Construct();
				$this->load->helper(array('form', 'url'));
				$this->load->library(array('session', 'form_validation', 'email'));
				$this->load->database();
				$this->load->model('user_model');
				$this->load->model('Medicines_model');
		}
// show all medicines
	public function show_medicines() {
		$this->load->model('Medicines_model');
		$data['medicines']=$this->Medicines_model->getMedicines();
		$data['page']='medicines/show_medicines';
		$this->load->view('menu/content',$data);
	}
// show personal medicine list
	public function show_list() {
		$this->load->model('Medicines_model');
		$data['medicines']=$this->Medicines_model->getList($this->session->userdata('userId'));
		if (!empty($_SESSION)) {
			$data['loggedUser']=$this->Medicines_model->getUserData($this->session->userdata('userId'));
		}
		$data['page']='medicines/list';
		$this->load->view('menu/content',$data);
	}
// add a medicine from all medicines to personal list
	public function add_medicine($m_id)
	{
				$this->load->model('Medicines_model');
				$inserted_data = array('id' => "",
																'm_id'=>$m_id,
																'u_id'=>$this->session->userdata('userId')
				);
				$this->Medicines_model->addMedicine($inserted_data);
				$this->show_medicines();
	}
	// delete a medicine from personal list
	public function delete_medicine($l_id)
	{
				$this->load->model('Medicines_model');
				$this->Medicines_model->deleteMedicine($l_id);
				$this->show_list();
	}
  // edit user desciption
	public function editdescription()
	{
			$this->load->view('edit_description');
	}
	public function edit_description()
	{
				$desc=$_POST['desc'];
				$u_id=$this->session->userdata('userId');
				$this->load->model('Medicines_model');
				$this->Medicines_model->updateUserDescription($u_id,$desc);
				$this->show_list();
	}
}
