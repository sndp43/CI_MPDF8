# CodeIgniter 2 PHP 7.3 and MPDF 8
downloaded and intalled mpdf 8 without composer to location "Codeigniter2/application/libraries/mpdf8"

create library M_pdf.php 
--------------------------
class M_pdf 
{ 
    function __construct()
    { 
        include_once APPPATH.'libraries\mpdf8\vendor\autoload.php'; 
    } 
    function pdf()
    { 
        $CI = & get_instance(); 
        log_message('Debug', 'mPDF class is loaded.'); 
    } 
    function load($param=[])
    { 
        return new \Mpdf\Mpdf($param); 
    } 
}
-----------------------------

use in Welcome controller
-----------------------------
$this->load->library('M_pdf');
		$mpdf = $this->m_pdf->load([
		   'mode' => 'utf-8',
		   'format' => 'A4'
		]);
		$data = [];
		$html = $this->load->view("table",$data,true);

		$mpdf->WriteHTML($html);
		$mpdf->Output("abc.pdf","D");
--------------------------------

and you are good to go.Best Luck	