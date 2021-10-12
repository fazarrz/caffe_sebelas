<?php

namespace App\Models;
use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'tbl_menu';

    protected $primaryKey = 'id';

    protected $allowedFields = ['id_kategori', 'menu', 'gambar', 'harga', 'deskripsi'];

    public function getMenubyId($id)
    {
        return $this->db->table('tbl_menu')->getWhere(['id' => $id])->getRowArray();
    }

    public function getAllData()
    {
        return $this->db->table('tbl_menu')->get()->getResultArray();
    }
}

?>