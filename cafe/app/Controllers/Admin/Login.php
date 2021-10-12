<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
		$data = [];
		if ($this->request->getMethod() == 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$model = new UserModel();
			$user = $model->where(['email'=>$email])->first();
			if($user)
			{
				
				if (password_verify($password, $user['password'])) {

					if($user['aktif'] == 1)
					{
						$this->setSession($user);
						if($user['level'] == 'Koki')
						{
							return redirect()->to(base_url("/admin/orderdetail"));
						}
						elseif($user['level'] == 'Kasir')
						{
							return redirect()->to(base_url("/admin/order"));
						}
						elseif($user['level'] == 'Admin')
						{
							return redirect()->to(base_url("/admin/dashboard"));
						}
					}
					else
					{
						$data['info']="Akun Dinon-aktifkan.";
					}
				}
				else {
					
					$data['info']="Password salah.";
				}
			}
			else
			{
				$data['info']="Email salah.";
			}

		}
		
		return view('template/login', $data);
	}

	public function setSession($user)
	{
		$data = [
			'user' => $user['user'],
			'email' => $user['email'],
			'level' => $user['level'],
			'loggedIn' => true 
		];

		session()->set($data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/login'));
	}

	//--------------------------------------------------------------------

}
