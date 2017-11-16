<!-- Medicines model manages Medicines data -->
<?php
Class Medicines_model extends CI_model {
  // get all medicines
	public function getMedicines(){
		$this->db->select('*');
		$this->db->from('medicines');
		return $this->db->get()->result_array();
	}
  // get personal medicine list
	public function getList($u_id){
		$this->db->select('*');
		$this->db->from('medicines');
		$this->db->join('lists','medicines.id = lists.m_id');
		$this->db->where('lists.u_id',$u_id);
		return $this->db->get()->result_array();
	}
  // get personal user account data
	public function getUserData($u_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user.id',$u_id);
		return $this->db->get()->result_array();
	}
	// update db with new user description
	public function updateUserDescription($u_id,$desc){
		$this->db->set('description', $desc);
		$this->db->where('id', $u_id);
		$this->db->update('user');
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}
  // add a medicine to personal list
	public function addMedicine($inserted_data){
		$this->db->insert('lists',$inserted_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}
  // delete a medicine from personal list
	public function deleteMedicine($deleted_data){
		$this->db->where('id', $deleted_data);
		$this->db->delete('lists');
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}
	// search medicine
	public function searchDrug($drug){
		$this->db->like('name',$drug);
    $query  =   $this->db->get('medicines');
    return $query->result_array();
	}
}
