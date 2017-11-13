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
	public function show_medicines() {
		$this->load->model('Medicines_model');
		$data['medicines']=$this->Medicines_model->getMedicines();
		$data['page']='medicines/show_medicines';
		$this->load->view('menu/content',$data);
	}
	public function show_list() {
		$this->load->model('Medicines_model');
		$data['medicines']=$this->Medicines_model->getList($this->session->userdata('userId'));
		$data['page']='medicines/list';
		$this->load->view('menu/content',$data);
	}
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
	public function delete_medicine($l_id)
	{
				$this->load->model('Medicines_model');
				$this->Medicines_model->deleteMedicine($l_id);
				$this->show_list();
	}
}
