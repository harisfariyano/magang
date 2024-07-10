<?php
defined('BASEPATH') or exit('No direct script access allowed');

// class M_quest extends CI_Model {

//     public function get_all_quests($limit, $offset, $jenis_quest = null, $sub_quest = null) {
//         if ($jenis_quest) {
//             $this->db->where('id_jenis_quest', $jenis_quest);
//         }
//         if ($sub_quest) {
//             $this->db->where('id_sub_quest', $sub_quest);
//         }
//         $query = $this->db->get('quest');
//         // return $query->result();
//         $this->db->select('quest.*, jenis_quest.title as jenis_quest_title, sub_quest.title as sub_quest_title, 
// 		sub_quest.Sub_ke as sub_quest_ke');
//         // $this->db->from('quest');
// 		$this->db->join('jenis_quest', 'jenis_quest.id = quest.id_jenis_quest', 'left');
// 		$this->db->join('sub_quest', 'sub_quest.id = quest.id_sub_quest', 'left');
//         $this->db->limit($limit, $offset);
// 		// $this->db->where('quest.id_jenis_quest', $jenis_quest);
// 		// $this->db->where('sub_quest.Sub_ke', $sub_quest);
//         $query = $this->db->get('quest', $limit, $offset);
//         return $query->result();
//     }

//     public function count_all_quests($jenis_quest = null, $sub_quest = null) {
//         if ($jenis_quest) {
//             $this->db->where('id_jenis_quest', $jenis_quest);
//         }
//         if ($sub_quest) {
//             $this->db->where('id_sub_quest', $sub_quest);
//         }
//         return $this->db->count_all('quest');
//     }
// }

class M_jenis_quest extends CI_Model
{
    public function get_all()
    {
        $this->db->select('quest.*, jenis_quest.title as jenis_quest_title, sub_quest.title as sub_quest_title, 
    	sub_quest.Sub_ke as sub_quest_ke');
        $this->db->from('quest');
        $this->db->join('jenis_quest', 'jenis_quest.id = quest.id_jenis_quest', 'left');
        $this->db->join('sub_quest', 'sub_quest.id = quest.id_sub_quest', 'left');
        $query = $this->db->get('jenis_quest');
        return $query->result();
    }
}

class M_sub_quest extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('sub_quest');
        return $query->result();
    }
}
class M_quest extends CI_Model
{
    public function get_titles()
    {
        $query = $this->db->select('id, title')
            ->from('sub_quest')
            ->get();
        return $query->result_array();
    }

    public function get_jenis_titles()
    {
        $query = $this->db->select('id, title')
            ->from('jenis_quest')
            ->get();
        return $query->result_array();
    }

    public function get_jenis_title_by_id($id)
    {
        $query = $this->db->select('title')
            ->from('jenis_quest')
            ->where('id', $id)
            ->get();
        return $query->row('title');
    }

    public function get_sub_quest_title_by_id($id)
    {
        $query = $this->db->select('title')
            ->from('sub_quest')
            ->where('id', $id)
            ->get();
        return $query->row('title');
    }

    public function get_all_quests()
    {
        $query = $this->db->get_where('quest', array('is_active' => 1));
        return $query->result();
    }

    public function create_quest($data)
    {
        return $this->db->insert('quest', $data);
    }

    public function update_quest($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('quest', $data);
    }

    public function get_quest_by_id($id)
    {
        $this->db->select('q.*, jenis_quest.title as jenis_quest, sub_quest.title as sub_quest');
        $this->db->from('quest q');
        $this->db->join('jenis_quest jenis_quest', 'q.id_jenis_quest = jenis_quest.id', 'left');
        $this->db->join('sub_quest sub_quest', 'q.id_sub_quest = sub_quest.id', 'left');
        $this->db->where('q.id', $id);

        $query = $this->db->get();

        return $query->row();
    }

    public function delete_quest($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('quest');
    }

    public function count_all_quests($filter_params = [])
    {
        $this->db->from('quest');
        $this->db->where('is_delete', 0);

        if (!empty($filter_params['id_jenis_quest'])) {
            $this->db->where('id_jenis_quest', $filter_params['id_jenis_quest']);
        }
        if (!empty($filter_params['id_sub_quest'])) {
            $this->db->where('id_sub_quest', $filter_params['id_sub_quest']);
        }

        return $this->db->count_all_results();
        // return $this->db->count_all('quest');
    }

    public function get_all_quests_paginated($filter_params = [])
    {
        $this->db->select('q.*, jenis_quest.title as jenis_quest, sub_quest.title as sub_quest');
        $this->db->from('quest q');
        $this->db->join('jenis_quest jenis_quest', 'q.id_jenis_quest = jenis_quest.id', 'left');
        $this->db->join('sub_quest sub_quest', 'q.id_sub_quest = sub_quest.id', 'left');
        $this->db->where('q.is_delete', 0);

        if (!empty($filter_params['id_jenis_quest'])) {
            $this->db->where('q.id_jenis_quest', $filter_params['id_jenis_quest']);
        }
        if (!empty($filter_params['id_sub_quest'])) {
            $this->db->where('q.id_sub_quest', $filter_params['id_sub_quest']);
        }

        // $this->db->limit($limit, $start);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_jenis_quest()
    {
        $this->db->select('id, title');
        $this->db->from('jenis_quest');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all_sub_quest()
    {
        $this->db->select('id, title');
        $this->db->from('sub_quest');
        $query = $this->db->get();
        return $query->result_array();
    }
}
