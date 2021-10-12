<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrderDetail extends BaseController
{
	public function index()
	{
		$db      = \Config\Database::connect();
        $ordermodel = new OrderModel();
        $order = $ordermodel->getAllOrder();
        $data = [
            'judul' => 'Order Detail',
            'orderdetail' => $order
        ];

        echo view('orderdetail/select', $data);
    }
    

    public function ubahStatus()
    {
        $idorder = $this->request->getGet('idorder');
        $status = $this->request->getGet('status');

        if($status == 0)
        {
            $status = 1;
        }
        elseif($status == 1)
        {
            $status = 2;
        }

        $ordermodel = new OrderModel();
        $ordermodel->ubahStatus($idorder, $status);
        return redirect()->back();        
    }
    public function update()
    {
        $idorder = $this->request->getGet('idorder');
        $ordermodel = new OrderModel();
        $orderdetail = $ordermodel->getOrderDetailByIdOrder($idorder);
        $data = [
            'orderdetail' => $orderdetail,
            'idorder' => $idorder
        ];

        echo view('/orderdetail/update', $data);
    }

	//--------------------------------------------------------------------

}