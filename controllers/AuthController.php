<?php 

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$this->setLayout('auth');
		return $this->render('login');
	}

	public function register(Request $request)
	{
		$this->setLayout('auth');
		$user = new User();
		if ($request->isPost()) {
			$user->loadData($request->getBody());
			if ($user->validate() && $user->register()) {
				return 'siccess';
			}
			return $this->render('register', ['user' => $user]);
		}
		return $this->render('register', ['user' => $user]);
	}
}