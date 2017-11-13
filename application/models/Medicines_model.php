<?php
Class Medicines_model extends CI_model {
	public function getMedicines(){
		$this->db->select('*');
		$this->db->from('medicines');
		return $this->db->get()->result_array();
	}
	public function getList($u_id){
		$this->db->select('*');
		$this->db->from('medicines');
		$this->db->join('lists','medicines.id = lists.m_id');
		$this->db->where('lists.u_id',$u_id);
		return $this->db->get()->result_array();
	}
	public function addMedicine($inserted_data){
		$this->db->insert('lists',$inserted_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}
	public function deleteMedicine($deleted_data){
		$this->db->where('id', $deleted_data);
		$this->db->delete('lists');
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}
}
