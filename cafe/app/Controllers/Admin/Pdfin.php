<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;

use TCPDF;

class Pdfin extends BaseController
{

    public function cari()
    {
        if (isset($_POST['awal'])) {
            $awal = $_POST['awal'];
            $sampai = $_POST['sampai'];


            $db      = \Config\Database::connect();
            $sql     =   "SELECT * FROM tbl_order JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id WHERE tbl_order.tgl_order BETWEEN '$awal' AND '$sampai' AND tbl_order.status = 1 ORDER BY `tbl_order`.`tgl_order` ASC";
            $sql2     =   "SELECT SUM(tbl_order.total) as total FROM tbl_order JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id WHERE tbl_order.tgl_order BETWEEN '$awal' AND '$sampai' AND tbl_order.status = 1 ORDER BY `tbl_order`.`tgl_order` ASC";
           
            $result = $db->query($sql);
            $resul2 = $db->query($sql2);
    
            $row = $result->getResult('array');
            $total = $resul2->getResult('array');

            $ordermodel = new OrderModel();
            $masukan = $ordermodel->getUang('1');

            $data = [
                'judul' => 'Order',
                'order' => $row,
                'masukan' => $total[0]['total'],
                'awal' => strtotime($awal),
                'sampai' => strtotime($sampai)
            ];

            $html = view('home/pdfin', $data);

            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Admin Cafe Sebelas');
            $pdf->SetTitle('Laporan Bulanan');
            $pdf->SetSubject('Laporan Bulanan');
    
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
    
            $pdf->addPage();
    
            $pdf->writeHTML($html, true, false, true, false, '');
    
            $this->response->setContentType('application/pdf');
    
            $pdf->Output('laporan.pdf', 'I');
    
    
        }
    }
}