<?php namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
	public function index()
	{
		$model = new UserModel();
		$user = $model -> findAll();

		$data = [
			'judul' => 'User',
			'user' => $user
		];

		return view ("user/select", $data);
    }

    public function create()
    {
        $data = [
            'level' => ['Admin', 'Kasir', 'Koki']
        ]; 
        
        return view ("user/insert", $data);
    }

    public function insert()
    {

        if (isset($_POST['password'])) {
            
            $data = [
                'user' => $_POST['user'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'level' => $_POST['level'],
                'aktif' => 1

            ];

            $model = new UserModel();

            if ($model -> insert($data)===false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error);
                return redirect()->to(base_url("/admin/user/create"));
            } else {
                session()->setFlashdata('success', 'Data Berhasil Disimpan');
                return redirect()->to(base_url("/admin/user"));
            }
        }
    }

    public function delete($id = null)
	{

		$model = new UserModel();
		$model -> delete($id);

		session()->setFlashdata('success', 'Data Berhasil Dihapus');

		return redirect()->to(base_url("/admin/user"));
    }
    
    public function update($id=null, $isi = 1)
    {
        $model = new UserModel();

        if ($isi == 0){
            $isi = 1;
        } else {
            $isi = 0;
        }

        $data = [
            'aktif' => $isi
        ];

        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
        
    }

    public function find($id=null)
	{
		$model = new UserModel();
		$user = $model -> find($id);

		$data = [
			'judul' => 'Ubah Data',
            'user' => $user,
            'level' => ['ADMIN', 'KASIR', 'KOKI']
		];

		return view ("user/update", $data);
    }
    
    public function ubah()
    {
        $id = $_POST['id'];
        $model = new UserModel();

        $data = [
            'email' => $_POST['email'],
            'level' => $_POST['level']
        ];

        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));

    }

	//--------------------------------------------------------------------

}
