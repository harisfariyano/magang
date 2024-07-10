<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_report extends CI_Model
{

	private $prodi_map = [
		'01' => 'Desain Komunikasi Visual',
		'02' => 'Teknik Elektronika',
		'03' => 'Teknik Mesin',
		'04' => 'Teknik Komputer',
		'05' => 'Akuntansi',
		'06' => 'Farmasi',
		'07' => 'Kebidanan',
		'08' => 'Keperawatan',
		'09' => 'Teknik Informatika',
		'10' => 'Akuntansi Sektor Publik'
		// Add more mappings here if needed
	];

	private $dosen_map = [
		'01' => 'Dosen A',
		'02' => 'Dosen B'
		// Add more mappings here if needed
	];


	public function get_report_tendik()
	{
		// Query the database for the report data
		$this->db->select('a.id_prodi, a.tahun_ajaran, q.quesioner, jq.title as jenis_quest_title, sq.title as sub_quest_title,
                           AVG(a.answer) as avg_score', FALSE);
		$this->db->from('answer as a');
		$this->db->join('quest as q', 'a.id_quest = q.id');
		$this->db->join('jenis_quest as jq', 'q.id_jenis_quest = jq.id', 'left');
		$this->db->join('sub_quest as sq', 'q.id_sub_quest = sq.id', 'left');
		$this->db->where('q.id_jenis_quest', 2);

		// Sort the result by id_prodi, id_sub_quest, and id_tahun_ajaran in ascending order
		$this->db->order_by('a.id_prodi asc, q.id_sub_quest asc');

		// Group the result by id_prodi, id_tahun_ajaran, id_quest, jenis_quest_title, and sub_quest_title
		$this->db->group_by('a.id_prodi, a.tahun_ajaran, a.id_quest, jq.title, sq.title');

		$query = $this->db->get();
		$result = $query->result_array();

		// Map the id_prodi values to their respective names
		foreach ($result as &$row) {
			$row['prodi_name'] = isset($this->prodi_map[$row['id_prodi']]) ? $this->prodi_map[$row['id_prodi']] : 'Unknown';
		}

		// Return the report data
		return $result;
	}


	public function get_report_sarpras()
	{

		// Query data laporan
		$this->db->select('a.id_prodi, a.tahun_ajaran, q.quesioner, jq.title as jenis_quest_title, sq.title as sub_quest_title,
                           AVG(a.answer) as avg_score', FALSE);
		$this->db->from('answer as a');
		$this->db->join('quest as q', 'a.id_quest = q.id');
		$this->db->join('jenis_quest as jq', 'q.id_jenis_quest = jq.id', 'left');
		$this->db->join('sub_quest as sq', 'q.id_sub_quest = sq.id', 'left');
		$this->db->where('q.id_jenis_quest', 1);

		$this->db->order_by('a.id_prodi asc, q.id_sub_quest asc');

		$this->db->group_by('a.id_prodi, a.tahun_ajaran, a.id_quest, jq.title, sq.title');

		$query = $this->db->get();
		$result = $query->result_array();

		// Map id_prodi to their names
		foreach ($result as &$row) {
			$row['prodi_name'] = isset($this->prodi_map[$row['id_prodi']]) ? $this->prodi_map[$row['id_prodi']] : 'Unknown';
		}

		return $result;
	}

	public function get_report_eval()
	{
		// Query data laporan
		$this->db->select('a.id_prodi, a.tahun_ajaran, q.quesioner, jq.title as jenis_quest_title, sq.title as sub_quest_title,
                           AVG(a.answer) as avg_score', FALSE);
		$this->db->from('answer as a');
		$this->db->join('quest as q', 'a.id_quest = q.id');
		$this->db->join('jenis_quest as jq', 'q.id_jenis_quest = jq.id', 'left');
		$this->db->join('sub_quest as sq', 'q.id_sub_quest = sq.id', 'left');
		$this->db->where('q.id_jenis_quest', 3);

		$this->db->order_by('a.id_prodi asc, q.id_sub_quest asc');

		$this->db->group_by('a.id_prodi, a.tahun_ajaran, a.id_quest, jq.title, sq.title');

		$query = $this->db->get();
		$result = $query->result_array();

		// Map id_prodi to their names
		foreach ($result as &$row) {
			$row['prodi_name'] = isset($this->prodi_map[$row['id_prodi']]) ? $this->prodi_map[$row['id_prodi']] : 'Unknown';
		}

		return $result;
	}

	public function get_report_edom()
	{
		// Query data laporan
		$this->db->select('a.tahun_ajaran, a.id_prodi, a.id_dosen, sq.title as sub_quest_title, jq.title as jenis_quest_title,
		AVG(a.answer) as nilai', FALSE); // Add FALSE parameter to avoid escaping the query
		$this->db->from('answer as a');
		$this->db->join('quest as q', 'a.id_quest = q.id');
		$this->db->join('jenis_quest as jq', 'q.id_jenis_quest = jq.id', 'left');
		$this->db->join('sub_quest as sq', 'q.id_sub_quest = sq.id', 'left');

		$this->db->where('q.id_jenis_quest', 4);

		$this->db->order_by('a.tahun_ajaran, a.id_dosen asc, q.id_sub_quest asc, a.id_prodi asc');

		$this->db->group_by('a.tahun_ajaran, a.id_prodi, a.id_dosen, q.id_sub_quest');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function count_all_reports()
	{
		// Menghitung total baris data laporan
		return $this->db->count_all_results('answer');
	}


	public function insert_calculated_data($data)
	{
		return $this->db->insert('count_not_edom', $data);
	}
}
