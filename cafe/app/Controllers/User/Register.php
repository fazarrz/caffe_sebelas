<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PelangganModel;

class Register extends BaseController
{
    public function index()
    {
		echo view ("home/daftar");
    }

    public function create()
    {
        echo view("home/daftar");
    }

    public function insert()
    {
        if (isset($_POST['password'])) {
            
            $data = [
                'pelanggan' => $_POST['pelanggan'],
                'alamat' => $_POST['alamat'],
                'no_telp' => $_POST['no_telp'], 
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'aktif' => 1
            ];

            $model = new PelangganModel();

            if ($model -> insert($data)===false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error);
                return redirect()->to(base_url("/user/register/create"));
            } else {
                return redirect()->to(base_url("/user/success"));
            }
        }
    }
}