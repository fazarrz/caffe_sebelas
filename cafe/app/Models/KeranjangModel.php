<?php

namespace App\Models;
use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'tbl_keranjang';

    protected $allowedFields = ['id_menu', 'id_pelanggan'];

    protected $primaryKey = 'id';

    public function getMyKeranjang($idpelanggan)
    {
        return $this->db->table('tbl_keranjang')->select('*, tbl_keranjang.id as id_keranjang')->join('tbl_menu', 'tbl_menu.id = tbl_keranjang.id_menu')->getWhere(['id_pelanggan' => $idpelanggan])->getResultArray();
    }

    public function cekKeranjang($idmenu, $idpelanggan)
    {
        $data = $this->db->table('tbl_keranjang')->getWhere(['id_menu' => $idmenu, 'id_pelanggan' => $idpelanggan])->getRowArray();

        if($data)
        {
            return 'sudah pesan';
        }
        else
        {
            return 'belum pesan';
        }
    }

    public function deleteByIdPelangaan($idpelanggan)
    {
        $this->db->table('tbl_keranjang')->where('id_pelanggan', $idpelanggan)->delete();
        return true;
    }

}

?>