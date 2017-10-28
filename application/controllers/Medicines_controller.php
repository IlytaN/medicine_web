<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicines_controller extends CI_Controller {
	public function test() {
		$this->load->model('Medicines_model');
		$data['medicines']=$this->Medicines_model->getMedicines();
		$data['page']='medicines/show_medicines';
		$this->load->view('menu/content',$data);
	}
}
