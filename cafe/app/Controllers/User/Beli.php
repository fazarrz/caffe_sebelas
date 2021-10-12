<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\KeranjangModel;
use App\Models\PelangganModel;
use App\Models\OrderModel;

class Beli extends BaseController
{
    public function index()
    {
        $pelModel = new PelangganModel();
        $email = session()->get('email');
        $idpel = $pelModel->getByEmail($email);

        $keranjangModel = new KeranjangModel();
        $keranjang = $keranjangModel->getMyKeranjang($idpel);
        $data = [
            'keranjang' => $keranjang,
            'pelanggan' => $pelModel->getPelangganID($email)
        ];
        
        if (session()->get('pelanggan')== null) {
            return redirect()->to(base_url("/user/login"));
        }else{
            echo view("home/beli", $data);
        }
    
    }

    public function tambahkeranjang()
    {
        if (session()->get('pelanggan')== null) {
            return redirect()->to(base_url("/user/login"));
        }
        $pelModel = new PelangganModel();
        $email = session()->get('email');
        $idpel = $pelModel->getByEmail($email);

        $idMenu = $this->request->uri->getSegment(4);
        if(!$idMenu)
        {
            return redirect()->back();
        }
        $keranjangModel = new KeranjangModel();
        
        $data = [
            'id_menu' => $idMenu,
            'id_pelanggan' => $idpel
        ];

        $cek = $keranjangModel->cekKeranjang($idMenu, $idpel);
        if($cek == 'sudah pesan')
        {
            return redirect()->to(base_url('/user/beli'));
        }
        else
        {
            $keranjangModel->insert($data);
            return redirect()->to(base_url('/user/beli'));
        }

    }
    
    public function belimenu()
    {
        $pelModel = new PelangganModel();
        $email = session()->get('email');
        $idpel = $pelModel->getByEmail($email);

        $keranjangModel = new KeranjangModel();
        $keranjang = $keranjangModel->getMyKeranjang($idpel);
        
        $ordermodel = new OrderModel();
        $cekorder = $ordermodel->cekOrder($idpel);

        if($cekorder == null)
        {
            $dataorder = [
                'id_pelanggan' => $idpel,
                'tgl_order' => date('Y-m-d H:i:s'),
                'status' => 0
            ];
            $ordermodel->insert($dataorder);
        }
        
        $idOrder = $ordermodel->cekOrder($idpel);
        $banyakRow = count($keranjang);
        for ($i=1; $i <= $banyakRow; $i++) {

            $cekorderdetail = $ordermodel->cekOrderDetail($idpel, $this->request->getPost('id_menu'.$i));

            if($cekorderdetail)
            {
                $jumlah = $this->request->getPost('jumlah'.$i) + $cekorderdetail['jumlah'];
                $tot = $this->request->getPost('hargamenu'.$i) * $this->request->getPost('jumlah'.$i);
                $total = $tot + $cekorderdetail['harga_jual'];
                $data = [
                    'jumlah' => $jumlah,
                    'harga_jual' => $total
                ];
                $ordermodel->updateOrderDet($cekorderdetail['id'], $data);
            }
            else
            {
                $data = [
                    'id_order' => $idOrder,
                    'id_menu' => $this->request->getPost('id_menu'.$i),
                    'jumlah' => $this->request->getPost('jumlah'.$i),
                    'harga_jual' => $this->request->getPost('hargamenu'.$i) * $this->request->getPost('jumlah'.$i)
                ];
                
                $ordermodel->tambahOrderDetail($data);
            }
        }
        
        $total = $ordermodel->myTotalOrder($idOrder);
        $ordermodel->setTotalOrder($idOrder, $total['harga_jual']);

        $keranjangModel->deleteByIdPelangaan($idpel);
        return redirect()->to(base_url('/user/pemesanan'));
    }

    public function delete()
	{
        $id = $this->request->uri->getSegment(4);
		$model = new KeranjangModel();
		$model->delete($id);

		return redirect()->to(base_url("/user/beli"));
    }
}   