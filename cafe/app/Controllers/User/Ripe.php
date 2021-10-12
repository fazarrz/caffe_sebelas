<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\PelangganModel;
use App\Models\OrderModel;
use App\Models\OrderDetail;

class Ripe extends BaseController
{
    
    public function index()
    {
        $pelModel = new PelangganModel();
        $email = session()->get('email');
        $idpel = $pelModel->getByEmail($email);

        $ripeModel = new OrderModel();
        $allIdOrder = $ripeModel->getAllMyOrder($idpel);
        if(!$allIdOrder)
        {
            return redirect()->to(base_url('/user/pesan'));
        }

        $data = [
            'riwayat' => $allIdOrder
        ];


        echo view("home/riwayat", $data);
    }
}   