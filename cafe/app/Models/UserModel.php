<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user';
    
    protected $primaryKey = 'id';
    protected $allowedFields = ['user', 'email', 'password', 'level', 'aktif'];

    protected $validationRules = [
        'user'     => 'alpha_numeric_space|min_length[3]|is_unique[tbl_user.user]',
        'email'    => 'valid_email|is_unique[tbl_user.email]'
    ];

    protected $validationMessages = [

        'user' => [

            'alpha_numeric_space' => 'Jangan menggunakan simbol.',
            'min_length' => 'Minimal 3 huruf.',
            'is_unique' => 'User ini telah terdaftar.'
        ],

        'email' => [

            'valid_email' => 'Email salah',
            'is_unique' => 'Email ini sudah terdaftar.'
        ],
    ];

}

?>