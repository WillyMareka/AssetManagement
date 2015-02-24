<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function printreceipt()
	{
		$data['x'] = 'Receipt';
		$html = $this->load->view('reports/receipt_template', $data, true);
		$this->export->pdfhandler('landscape', $html, 'Receipt');

	}

	function checkreceipt()
	{
		$this->load->view('reports/receipt_template');
	}
}