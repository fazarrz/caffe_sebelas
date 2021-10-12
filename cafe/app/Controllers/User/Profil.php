<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use App\Models\OrderModel;

class Profil extends BaseController
{
    
    public function index()
    {
		$pelModel = new PelangganModel();
    $email = session()->get('email');
    $idpel = $pelModel->getByEmail($email);

    $model = new PelangganModel();
		$pelanggan = $model->getPelangganID($email);
    
    $ordermodel = new OrderModel();
    $pesanan = $ordermodel->getDataForId($email);
    $konfirm_panding = $ordermodel->getDataForStatus($email, 0);
    $cook = $ordermodel->getDataForStatus($email, 1);
    $konfirm = $ordermodel->getDataForStatus($email, 2);
    $lunas = $ordermodel->getDataForStatusOrder($email, 1);
    $belumlunas = $ordermodel->getDataForStatusOrder($email, 0);
    $masukdata = $ordermodel->getDataMoneyForId($email, 1);
    $belumdata = $ordermodel->getDataMoneyForId($email, 0);
    
		$data = [
      'pelanggan' => $pelanggan,
      'pesanan' => count($pesanan),
      'konfirm_panding' => count($konfirm_panding),
      'cook' => count($cook),
      'konfirm' => count($konfirm),
      'lunas' => count($lunas),
      'belumlunas' => count($belumlunas),
      'masukdata' => $masukdata['total'],
			'belumdata' => $belumdata['total']
    ];
    
    return view ("home/profile", $data);
    
    }
} 