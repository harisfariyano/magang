<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_answer extends CI_Model
{
	public function get_quests_by_type($jenis_quest)
	{
		$query = $this->db->get_where('quest', array('id_jenis_quest' => $jenis_quest, 'is_delete' => false));
		return $query->result();
	}

	public function get_quest($jenis_quest)
	{
		$this->db->select('quest.*, jenis_quest.title as jenis_quest_title, sq.title as sub_quest_title');
		$this->db->join('jenis_quest', 'jenis_quest.id = quest.id_jenis_quest', 'left');
		$this->db->join('sub_quest as sq', 'sq.id = quest.id_sub_quest', 'left');
		$this->db->where('quest.id_jenis_quest', $jenis_quest);
		// $this->db->where('quest.is_delete', false);
		$this->db->order_bY('quest.id_sub_quest asc');
		// $this->db->group_by('sq.title');
		$query = $this->db->get('quest');
		return $query->result();
	}

	public function get_sub_quest($jenis_quest, $sub_quest)
	{
		$this->db->select('quest.*, jenis_quest.title as jenis_quest_title, sq.title as sub_quest_title');
		$this->db->join('jenis_quest', 'jenis_quest.id = quest.id_jenis_quest', 'left');
		$this->db->join('sub_quest as sq', 'sq.id = quest.id_sub_quest', 'left');
		$this->db->where('quest.id_jenis_quest', $jenis_quest);
		$this->db->where('quest.id_sub_quest', $sub_quest);
		$this->db->order_bY('quest.id_sub_quest asc');
		// $this->db->group_by('sq.title');
		$query = $this->db->get('quest');
		return $query->result();
	}

	public function insert_batch_data($data)
	{
		return $this->db->insert_batch('answer', $data); // Replace 'answers' with your actual table name
	}
}
