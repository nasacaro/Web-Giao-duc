<?php
class Site_model extends CI_Model {
	function get_records()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	function get_record_by_id($id) 
	{
		$this->db->where('id', $id);
		$query = $this->db->get('data');
		return $query->result();
	}
	
	function add_record($data)
	{
		$this->db->insert('data', $data);
		return;
	}
	
	function update_record($id,$data)
	{
		$this->db->where('id', $id);
		return ($this->db->update('data', $data));
	}
	
	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('data');
	}
} 