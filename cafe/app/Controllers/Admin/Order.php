<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class Order extends BaseController
{
	public function index()
	{
        $db      = \Config\Database::connect();
        $sql     =   "SELECT *, tbl_order.id as id_order FROM tbl_order JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id ORDER BY status ASC";
       
       
        $result = $db->query($sql);

        $row = $result->getResult('array');

        $data = [
            'judul' => 'Order',
            'order' => $row
        ];

        echo view('order/select', $data);


    }

    public function find()
    {
        $id = $this->request->uri->getSegment(4);
        $db = new OrderModel();

        $row = $db->getOrderByID($id);

        $detail = $db->getOrderDetailByIdOrder($id);

        $data = [
            'judul' => 'Pembayaran',
            'order' => $row,
            'detail' => $detail
        ];

        echo view('order/update', $data);

    }
    
    public function update()
    {
        if(isset($_POST['bayar'])){
            $idorder = $_POST['id'];
            $total = $_POST['total'];
            $bayar = $_POST['bayar'];

            if ($bayar < $total) {
                session()->setFlashdata('info', 'Pembayaran kurang');
                return redirect()->back();
            } else {
                $kembali = $bayar-$total;
                $sql = "UPDATE tbl_order SET bayar=$bayar, kembalian=$kembali, status=1 WHERE id=$idorder";
                $db      = \Config\Database::connect();
                $db->query($sql);
                return redirect()->to(base_url("/admin/order"));
            }
        }
        
    }
    
	//--------------------------------------------------------------------

}
