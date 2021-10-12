<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\PelangganModel;
use App\Models\MenuModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$db      = \Config\Database::connect();
        $ordermodel = new OrderModel();
		$order = $ordermodel->getAllOrder();
		$jmlorder = $ordermodel->getAllStatusOrder('1');
		$status = $ordermodel->getAllStatusOrder('0');
		$pemasukan = $ordermodel->getUang('1');
		$panding = $ordermodel->getUang('0');
		
		$pelangganmodel = new PelangganModel();
		$pelanggan = $pelangganmodel->getAllPelanggan();

		$menumodel = new MenuModel();
		$menu = $menumodel->getAllData();

        $data = [
            'judul' => 'Order Detail',
			'orderdetail' => $order,
			'jmlpelanggan' => count($pelanggan),
			'jmlorders' => count($jmlorder),
			'jmlmenu' => count($menu),
			'statusorders' => count($status),
			'pemasukan' => $pemasukan['total'],
			'panding' => $panding['total']

		];
		return view('dashboard/admin', $data);
	}

	//--------------------------------------------------------------------

}