<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PelangganModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
		if ($this->request->getMethod() == 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$model = new PelangganModel();
			$user = $model->where(['email'=>$email])->first();
			if($user)
			{
				if(password_verify($password, $user['password']))
				{
					if($user['aktif'] == 1)
					{
						
						$this->setSession($user);
						return redirect()->to(base_url("/"));
					}
					else
					{
						$data['info']="Akun dinon-aktifkan.";
					}
				}
				else
				{
					$data['info']="Password salah.";
				}
			}
			else
			{
				$data['info']="Email salah.";
			}

		}
		
		return view('home/login', $data);   
    }

    public function setSession($user)
	{
		$data = [
			'pelanggan' => $user['pelanggan'],
			'email' => $user['email'],
			'loggedIn' => true 
		];

		session()->set($data);
	}
    
    public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}
}