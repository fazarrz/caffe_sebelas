<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'tbl_order';

    protected $primaryKey = 'id';

    protected $allowedFields = ['id_pelanggan', 'tgl_order', 'total', 'bayar', 'kembalian'];

    public function getAllOrder()
    {
        return $this->db->table('tbl_order')->select('*, tbl_order.id as id_order')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->orderBy('status', 'ASC')->get()->getResultArray();
    }

    public function cekOrder($id_pelanggan)
    {
        return $this->db->table('tbl_order')->select('id')->getWhere(['id_pelanggan' => $id_pelanggan, 'status' => 0])->getRowArray();
    }

    public function setTotalOrder($idOrder, $total)
    {
        $this->db->table('tbl_order')->set('total', $total)->where('id', $idOrder)->update();
        return true;
    }

    public function cekOrderDetail($id_pelanggan, $id_menu)
    {
        $order =  $this->db->table('tbl_order')->getWhere(['id_pelanggan' => $id_pelanggan, 'status' => 0])->getRowArray();

        if($order)
        {
            return $this->db->table('tbl_orderdetail')->getWhere([
                'id_order' => $order['id'],
                'id_menu' => $id_menu
                ])->getRowArray();
        }

        return false;  
    }    

    public function tambahJumlah($id_orderdetail, $jumlah) 
    {
        $this->db->table('tbl_orderdetail')->set('jumlah', $jumlah)->where('id', $id_orderdetail)->update();
        return true;
    }

    public function tambahOrderDetail($data)
    {
        $this->db->table('tbl_orderdetail')->insert($data);
    }

    public function myTotalOrder($idOrder)
    {
        return $this->db->table('tbl_orderdetail')->selectSum('harga_jual')->where('id_order', $idOrder)->get()->getRowArray();
    }

    public function updateOrderDet($idOrderDet, $data)
    {
        $this->db->table('tbl_orderdetail')->set($data)->where('id', $idOrderDet)->update();
    }

    public function getOrderById($id)
    {
        return $this->db->table('tbl_order')->select('*, tbl_order.id as id_order')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->where('tbl_order.id', $id)->get()->getRowArray();
    }
    public function getOrderDetailByIdOrder($id)
    {
        return $this->db->table('tbl_orderdetail')->join('tbl_menu', 'tbl_menu.id = tbl_orderdetail.id_menu')->join('tbl_order', 'tbl_order.id = tbl_orderdetail.id_order')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->where('id_order', $id)->get()->getResultArray();
    }

    public function getAllMyOrder($id_pelanggan)
    {
        return $this->db->table('tbl_orderdetail')->join('tbl_menu', 'tbl_menu.id = tbl_orderdetail.id_menu')->join('tbl_order', 'tbl_order.id = tbl_orderdetail.id_order')->where('tbl_order.id_pelanggan', $id_pelanggan)->orderBy('status', 'ASC')->get()->getResultArray();
    }

    public function ubahStatus($idorder, $status)
    {
        $this->db->table('tbl_orderdetail')->set('statusorder', $status)->where('id_order', $idorder)->update();
    }

    public function getAllDataOrder()
    {
        return $this->db->table('tbl_order')->get()->getResultArray();
    }

    public function getAllStatusOrder($statuse)
    {
        return $this->db->table('tbl_order')->where('status', $statuse)->get()->getResultArray();
    }

    public function getUang($statusbayar)
    {
        return $this->db->table('tbl_order')->selectSum('total')->where('status', $statusbayar)->get()->getRowArray();
    }

    public function getDataForId($email)
    {
        return $this->db->table('tbl_orderdetail')->join('tbl_order', 'tbl_order.id = tbl_orderdetail.id_order')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->where('tbl_pelanggan.email', $email)->get()->getResultArray();
    }

    public function getDataForStatus($email, $statuspesanan)
    {
        return $this->db->table('tbl_orderdetail')->join('tbl_order', 'tbl_order.id = tbl_orderdetail.id_order')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->where('tbl_pelanggan.email', $email)->where('tbl_orderdetail.statusorder', $statuspesanan)->get()->getResultArray();
    }

    public function getDataForStatusOrder($email, $statusorder)
    {
        return $this->db->table('tbl_order')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->where('tbl_pelanggan.email', $email)->where('tbl_order.status', $statusorder)->get()->getResultArray();
    }

    public function getDataMoneyForId($email, $statusdata)
    {
        return $this->db->table('tbl_order')->selectSum('total')->join('tbl_pelanggan', 'tbl_pelanggan.id = tbl_order.id_pelanggan')->where('tbl_pelanggan.email', $email)->where('tbl_order.status', $statusdata)->get()->getRowArray();
    }

    public function getDataAllOrderDetails($buyer)
    {
        return $this->db->table('tbl_order')->selectSum('total')->where('status', $buyer)->get()->getRowArray();
    }

}