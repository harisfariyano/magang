<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_answer extends CI_Model
{
	public function get_sub_quests()
	{
		$query = $this->db->get('sub_quest');
		return $query->result();
	}
	public function create_sub_quest($data)
	{
		return $this->db->insert('sub_quest', $data);
	}

	public function update_sub_quest($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('sub_quest', $data);
	}

	public function delete_sub_quest($id)
	{
		return $this->db->delete('sub_quest', array('id' => $id));
	}
}
