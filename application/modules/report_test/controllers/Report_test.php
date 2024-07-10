<?php defined('BASEPATH') or exit('No direct script access allowed');

class Report_test extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_report_test');
	}

	public function meta($jenis_quest)
	{
		if ($jenis_quest == "1") {
			$report = $this->M_report_test->get_report_sarpras();
		} else if ($jenis_quest == "2") {
			$report = $this->M_report_test->get_report_tendik();
		} else if ($jenis_quest == "3") {
			$report = $this->M_report_test->get_report_eval();
		} else if ($jenis_quest == "4") {
			$report = $this->M_report_test->get_report_edom();
		}

		// Data untuk ditampilkan di view
		$data = array(
			"judul"         => "Report",
			"halaman"       => "report",
			"view"          => "report",
			"jenis_quest"	=> $jenis_quest,
			"report" 		=> $report
			// "report_sarpras"    => $report_sarpras,
			// "report_tendik" => $report_tendik,
			// "report_eval"   => $report_eval,
			// "report_edom"   => $report_edom
		);
		return $data;
	}

	public function index($jenis_quest)
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
		// echo json_encode($jenis_quest);
		// $data = $this->meta($jenis_quest);
		// echo json_encode($data['report']);
	}
}
