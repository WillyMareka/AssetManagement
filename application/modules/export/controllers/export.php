<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('mpdf');
	}

	function pdfhandler($orientation, $html, $filename)
	{
		$pdfFilePath = $filename . '.pdf';
		$orientation = ($orientation == 'landscape') ? 'A5-L' : 'A5' ;
		$pdf = new mPDF('', $orientation, 0, '', 15, 15, 16, 16, 9, 9, '');
		$pdf->WriteHTML($html);
		$pdf->SetFooter("{DATE D j M Y }|{PAGENO}/{nb}|Prepared by: x, source ROAJOMA");
		$pdf->Output($pdfFilePath, "I");
	}
}