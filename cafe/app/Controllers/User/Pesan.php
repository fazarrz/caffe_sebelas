<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\KategoriModel;

class Pesan extends BaseController
{
    
    public function index()
    {
        $model = new MenuModel();
		$menu = $model -> findAll();

		$data = [
			'menu' => $menu
		];

		return view("home/produk", $data);
    }

    public function option()
    {
        $model = new KategoriModel();
		$kategori = $model->findAll();
		$data = [
			'kategori' => $kategori
		];
		return view('template/option2',$data);
    }

    public function read()
    {
       if (isset($_GET['id'])) {
           $id = $_GET['id'];

           $model = new MenuModel();
           $menu = $model->where('id_kategori', $id)->findAll();

            $data = [
                'menu' => $menu
            ];

            return view ("home/cari", $data);
       }
    }
}