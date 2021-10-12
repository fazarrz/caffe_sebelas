<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo 'hello';
	}

	public function read()
	{
		$model = new KategoriModel();
		$kategori = $model -> findAll();

		$data = [
			'judul' => 'Kategori',
			'kategori' => $kategori
		];

		return view ("kategori/select", $data);
	}

	public function create()
	{
		return view ("kategori/insert");
	}

	public function insert()
	{

		$model = new KategoriModel();
		if ($model -> insert($_POST)===false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['kategori']);
			return redirect()->to(base_url("/admin/kategori/create"));
		} else {
			session()->setFlashdata('success', 'Data Berhasil Disimpan');
			return redirect()->to(base_url("/admin/kategori"));
		}
		
	}

	public function find($id=null)
	{
		$model = new KategoriModel();
		$kategori = $model -> find($id);

		$data = [
			'judul' => 'Kategori',
			'kategori' => $kategori
		];

		return view ("kategori/update", $data);
	}
	

	public function update()
	{

		$model = new KategoriModel();
		$id =$_POST['id'];

		if ($model -> save($_POST)===false) {

			$error = $model->errors();
			session()->setFlashdata('info', $error['kategori']);
			return redirect()->to(base_url("/admin/kategori/find/$id"));

		} else {

			session()->setFlashdata('success', 'Data Berhasil Diubah');
			return redirect()->to(base_url("/admin/kategori"));
		}

		
	}

	public function delete($id = null)
	{

		$model = new KategoriModel();
		$model -> delete($id);

		session()->setFlashdata('success', 'Data Berhasil Dihapus');

		return redirect()->to(base_url("/admin/kategori"));
	}

	//--------------------------------------------------------------------

}
