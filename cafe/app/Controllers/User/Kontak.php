<?php namespace App\Controllers\User;

use App\Controllers\BaseController;

class Kontak extends BaseController
{
    
    public function index()
    {
        echo view("home/contact");
    }
}   