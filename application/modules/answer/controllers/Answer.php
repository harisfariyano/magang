<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Answer extends MX_Controller
{
    public function meta($jenis_quest)
    {
        $data_quests = $this->get_quest($jenis_quest);

        $load_sub_quest_url = site_url('answer/load_sub_quest');

        $data = array(
            "halaman"        => "answer",
            "view"           => "form",
            // "data_quest"    => $this->M_Universal->getMulti(NULL, "quest"),
            "data_quest"     =>  $data_quests,
            "load_sub_quest_url" => $load_sub_quest_url,
        );
        return $data;
    }

    public function index($jenis_quest = null)
    {
        if (!is_null($jenis_quest)) {
            // Lakukan sesuatu dengan jenis quest yang diterima
            // Misalnya, dapatkan data kuesioner berdasarkan jenis quest
            // Panggil metode meta() dengan menyertakan parameter jenis quest
            $this->load->view('template', $this->meta($jenis_quest));
        } else {
            // Redirect ke halaman lain jika jenis quest tidak diberikan
            redirect('halaman_tidak_ditemukan');
        }
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_answer');
    }

    public function get_quest($jenis_quest)
    {
        // $data['jenis_quest'] = $jenis_quest;
        // $data['current_sub_quest'] = $sub_quest;
        $data['quest'] = $this->M_answer->get_quest($jenis_quest);
        // $this->load->view('form', $data);
        return $data;
    }

    public function load_sub_quest()
    {
        $sub_quest = $this->input->post('sub_quest');
        $jenis_quest = 1;

        $next_sub_quest = $sub_quest + 1;
        $data_quests = $this->get_quest($jenis_quest, $next_sub_quest);

        $this->load->view('form', $data_quests);
    }

    public function submitForm()
    {
        // Check if the form is submitted
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Capture form data
            $formData = $this->input->post();
            // Save the data to the database
            $this->saveToDatabase($formData);
            // echo json_encode($formData);
        } else {
            // Redirect if accessed directly
            redirect('answer');
        }
    }

    // Method to save validated data to the database
    private function saveToDatabase($validatedData)
    {
        $dataToInsert = [];

        // Assuming these values are set from session or some other logic
        $id_user = '20090011'; // Replace with actual user ID
        $id_dosen = ''; // Replace with actual dosen ID
        $id_prodi = '02'; // Replace with actual prodi ID
        $tahun_ajaran = '2023/2024'; // Replace with actual academic year

        foreach ($validatedData as $question => $answer) {
            // Parse question ID from 'question_1', 'question_2', etc.
            $id_quest = intval(str_replace('question_', '', $question));

            $dataToInsert[] = [
                'id_user' => $id_user,
                'id_dosen' => $id_dosen,
                'id_prodi' => $id_prodi,
                'id_quest' => $id_quest,
                'tahun_ajaran' => $tahun_ajaran,
                'answer' => $answer
            ];
        }

        // Use the model to insert data
        if ($this->M_answer->insert_batch_data($dataToInsert)) {
            echo "Records inserted successfully.";
            redirect('');
        } else {
            echo "Error in inserting records.";
            redirect('');
        }
    }
}
