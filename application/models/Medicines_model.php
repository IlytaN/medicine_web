<?php
Class Medicines_model extends CI_model {
	public function getMedicines(){
		$this->db->select('*');
		$this->db->from('medicines');
		return $this->db->get()->result_array();
}
}
