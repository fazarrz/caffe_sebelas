<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\MenuModel;

class Menu extends BaseController
{
	public function index()
	{
        $model = new MenuModel();
		$menu = $model -> findAll();

		$data = [
			'judul' => 'Menu',
			'menu' => $menu
		];

		return view ("menu/select", $data);
    }

    public function create()
	{
        $model = new KategoriModel();
		$kategori = $model->findAll();
		$data = [
			'kategori' => $kategori
        ];
        
		return view ("menu/insert", $data);
	}

    public function read()
    {
       if (isset($_GET['id'])) {
           $id = $_GET['id'];

           $model = new MenuModel();
           $menu = $model->where('id_kategori', $id)->findAll();

            $data = [
                'judul' => 'Menu',
                'menu' => $menu
            ];

            return view ("menu/cari", $data);
       } 
    }

    public function insert()
	{
        $request = \Config\Services::request();
        $file = $request->getFile('gambar');
        $name = $file->getName();

        $data = [
            'menu' => $request->getPost('menu'),
            'id_kategori' => $request->getPost('id'),
            'gambar' => $name,
            'harga' => $request->getPost('harga'),
            'deskripsi' => $request->getPost('deskripsi')
        ];

        $model = new MenuModel();
        $model->insert($data);
        $file->move('./upload');
        return redirect()->to(base_url("/admin/menu"));
		
    }
    
    public function find($id=null)
	{
		$model = new MenuModel();
        $menu = $model -> find($id);

        $kategorimodel = new KategoriModel();
		$kategori = $kategorimodel->findAll();
        

		$data = [
			'judul' => 'Update Data',
            'menu' => $menu,
            'kategori' => $kategori
		];

		return view ("menu/update", $data);
    }
    
    public function update()
    {
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('gambar');
        $name = $file->getName();

        if (empty($name)) {
            $name = $this->request->getPost('gambar');
        } else {
            $file->move('./upload');
        }

        $data = [
            
            'id_kategori' => $this->request->getPost('id_kategori'),
            'menu' => $this->request->getPost('menu'),
            'gambar' => $name,
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi')

        ];

        $model = new MenuModel();
        $model->update($id, $data);
        return redirect()->to(base_url('/admin/menu'));
    }
    
    public function option()
    {
        $model = new KategoriModel();
		$kategori = $model->findAll();
		$data = [
			'kategori' => $kategori
		];
		return view('template/option',$data);
    }

    public function delete($id = null)
	{

		$model = new MenuModel();
		$model -> delete($id);

		session()->setFlashdata('success', 'Data Berhasil Dihapus');

		return redirect()->to(base_url("/admin/menu"));
	}

	//--------------------------------------------------------------------

}