<?php 

namespace app\controllers;

use app\core\Controller;
use app\core\Application;

class SiteController extends Controller
{
	public function home()
	{
		$params = [
			'name' => 'MO',
		];
		return $this->render('home', $params);
	}

	public function contact()
	{
		return $this->render('contact');
	}

	public function handleContact()
	{
		return 'Handl';
	}
}