<?php defined('BASEPATH') or exit('No direct script access allowed');

class Report extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_report');
	}

	public function meta()
	{
		$report_sarpras = $this->M_report->get_report_sarpras();
		$report_tendik = $this->M_report->get_report_tendik();
		$report_eval = $this->M_report->get_report_eval();
		$report_edom = $this->M_report->get_report_edom();

		// Data untuk ditampilkan di view
		$data = array(
			"judul"         => "Report",
			"halaman"       => "report",
			"view"          => "report",
			"report_sarpras"    => $report_sarpras,
			"report_tendik" => $report_tendik,
			"report_eval"   => $report_eval,
			"report_edom"   => $report_edom
		);
		return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
		// echo json_encode($jenis_quest);
		// $data = $this->meta($jenis_quest);
		// echo json_encode($data['report']);
	}
}
