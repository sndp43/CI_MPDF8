<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function index(){

    	$this->load->library('M_pdf');
		$mpdf = $this->m_pdf->load([
		   'mode' => 'utf-8',
		   'format' => 'A4'
		]);
		$data = [];
		$html = $this->load->view("table",$data,true);

		$mpdf->WriteHTML($html);
		$mpdf->Output("adf.pdf","D");


    }
    
}