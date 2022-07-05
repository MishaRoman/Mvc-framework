<?php 

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$this->setLayout('auth');
		return $this->render('login');
	}

	public function register()
	{
		$this->setLayout('auth');
		return $this->render('register');
	}
}