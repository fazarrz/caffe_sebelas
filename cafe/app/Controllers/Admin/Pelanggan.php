<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
	public function index()
	{
        $model = new PelangganModel();
		$pelanggan = $model -> findAll();

		$data = [
			'judul' => 'Pelanggan',
			'pelanggan' => $pelanggan
		];

		echo view('pelanggan/select', $data);
    }
    
    public function delete($id = null)
    {
        $model = new PelangganModel();
        $model->delete($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url("/admin/pelanggan"));
    }

    public function update($id=null, $isi)
    {
        $model = new PelangganModel();

        if ($isi == 0){
            $isi = 1;
        } else {
            $isi = 0;
        }

        $data = [
            'aktif' => $isi
        ];

        $model->update($id, $data);
        return redirect()->to(base_url("/admin/pelanggan"));
        
    }

    public function find($id=null)
    {
        $model = new PelangganModel();
		$pelanggan = $model ->find($id);

		$data = [
			'judul' => 'Pelanggan',
			'pelanggan' => $pelanggan
        ];

        return view ("pelanggan/ubah", $data);
    }

    public function ubah()
    {
        $id = $this->request->getPost('id');
        
        $data = [
        
            'pelanggan' => $this->request->getPost('pelanggan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'email' => $this->request->getPost('email')

        ];

		$pelanggan = new PelangganModel();
        $pelanggan->update($id, $data);
        return redirect()->to(base_url('/admin/pelanggan'));
    }

	//--------------------------------------------------------------------

}
