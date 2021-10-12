<?php namespace App\Controllers\User;

use App\Controllers\BaseController;

class Success extends BaseController{

    public function index()
    {
        echo view("home/berhasil");
    }
}