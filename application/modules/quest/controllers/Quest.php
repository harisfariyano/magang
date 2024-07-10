<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quest extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_quest');
    }

    public function meta()
    {
        $filter_params = [
            'id_jenis_quest' => $this->input->get('id_jenis_quest'),
            'id_sub_quest' => $this->input->get('id_sub_quest'),
            'id_prodi' => $this->input->get('id_prodi')
        ];
        $data_quests = $this->M_quest->get_all_quests_paginated($filter_params);

        foreach ($data_quests as $key => $quest) {
            $data_quests[$key]->jenis_title1 = $this->M_quest->get_jenis_title_by_id($quest->id_jenis_quest);
            $data_quests[$key]->sub_quest_title1 = $this->M_quest->get_sub_quest_title_by_id($quest->id_sub_quest);
        }

        // Fetch titles from both sub_quest and jenis_quest tables
        $titles = $this->M_quest->get_titles(); // Fetch titles from sub_quest table
        $jenis_titles = $this->M_quest->get_jenis_titles(); // Fetch titles from jenis_quest table

        $data = array(
            "halaman"        => "quest",
            "view"           => "quest",
            "data_quest"     => $data_quests,
            "titles"         => $titles,
            "jenis_titles"   => $jenis_titles,
            "jenis_quests"   => $this->M_quest->get_all_jenis_quest(),
            "sub_quests"     => $this->M_quest->get_all_sub_quest()
        );
        return $data;
    }



    public function index()
    {
        $this->load->view('template', $this->meta());
    }

    public function get_all_quests()
    {
        $data["quest"] = $this->M_quest->get_all_quests();
        return $data;
    }

    public function add()
    {
        // Get form data
        $data = array(
            'id_jenis_quest' => $this->input->post('id_jenis_quest'),
            'id_sub_quest'   => $this->input->post('id_sub_quest'),
            'quesioner'      => $this->input->post('quesioner'),
            'type_quest'     => $this->input->post('type_quest'),
            'is_delete'      => 0
        );

        // Insert data into the database
        $this->M_quest->create_quest($data);

        // Redirect to the quest list page
        redirect('quest');
    }

    public function get_quest_by_id($id)
    {
        $data = $this->M_quest->get_quest_by_id($id);
        echo json_encode($data);
    }

    public function update_is_active()
    {
        $id = $this->input->post('id');
        $is_active = $this->input->post('is_active');

        $this->db->set('is_active', $is_active);
        $this->db->where('id', $id);
        $this->db->update('quest');

        // Redirect back to the list or any appropriate page
        redirect('quest'); // Ganti dengan URL halaman yang sesuai
    }

    public function update($id)
    {
        // Get form data
        $data = array(
            'id_jenis_quest' => $this->input->post('id_jenis_quest'),
            'id_sub_quest'   => $this->input->post('id_sub_quest'),
            'quesioner'      => $this->input->post('quesioner'),
            'type_quest'     => $this->input->post('type_quest'),
            'updated_at'     => date('Y-m-d H:i:s')
        );

        // Update data in the database
        $this->M_quest->update_quest($id, $data);

        // Redirect to the quest list page
        redirect('quest');
    }


    public function delete($id)
    {
        // Delete data from the database
        $this->M_quest->delete_quest($id);

        // Redirect to the quest list page
        redirect('quest');
    }
}
