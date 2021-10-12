<?php namespace App\Controllers\User;

use App\Controllers\BaseController;

class HomePage extends BaseController
{
    
    public function index()
    {
        echo view("home/page");
    }
}   