<?php

namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'tbl_pelanggan';

    protected $primaryKey = 'id';

    protected $allowedFields = ['pelanggan', 'alamat', 'no_telp', 'email', 'password','aktif'];

    protected $validationRules = [
        'pelanggan'     => 'alpha_numeric_space|min_length[3]',
        'email'    => 'valid_email|is_unique[tbl_pelanggan.email]',
        'alamat' => 'min_length[3]|alpha_numeric_space',
        'no_telp'=> 'is_unique[tbl_pelanggan.no_telp]',
    ];

    protected $validationMessages = [

        'pelanggan' => [

            'alpha_numeric_space' => 'Nama jangan gunakan simbol',
            'min_length' => 'Nama minimal 3 huruf.',
        ],

        'email' => [

            'valid_email' => 'Email salah',
            'is_unique' => 'Email sudah terdaftar.'
        ],

        'alamat' => [

            'alpha_numeric_space' => 'Alamat jangan gunakan simbol.',
            'min_length' => 'Minimal 10 huruf.',
        ],

        'no_telp' => [

            'is_unique' => 'No. Telepon sudah terdaftar.'
        ],       

    ];

    public function getByEmail($email)
    {
        return $this->db->table('tbl_pelanggan')->select('id')->getWhere(['email' => $email])->getRowArray();
    }

    public function getPelangganID($id)
    {
        return $this->db->table('tbl_pelanggan')->getWhere(['email' => $id])->getRowArray();
   
    }

    public function getAllPelanggan()
    {
        return $this->db->table('tbl_pelanggan')->get()->getResultArray();
    }

}

?>