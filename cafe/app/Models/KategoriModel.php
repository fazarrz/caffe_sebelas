<?php

namespace App\Models;
use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tbl_kategori';

    protected $allowedFields = ['kategori'];

    protected $primaryKey = 'id';

    protected $validationRules = [
        'kategori'     => 'alpha_numeric_space|min_length[3]|is_unique[tbl_kategori.kategori]'
    ];

    protected $validationMessages = [

        'kategori' => [

            'alpha_numeric_space' => 'Jangan menggunakan simbol.',
            'min_length' => 'Minimal 3 huruf.',
            'is_unique' => 'Ada data yang sama, mohon dicek kembali.'
        ]
    ];


}

?>