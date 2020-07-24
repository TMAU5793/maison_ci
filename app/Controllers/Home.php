<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $locale = service('language')->getLocale();
		// echo lang('lang.apples',[5]).'<br>';
		// echo lang('lang.men',[5,10]);
		$data = [
			'lang'  => 'th',
			'registerText' => 'สมัครสมาชิก'
	  	];
		echo view('templates/header',$data);
		echo view('home');
		echo view('templates/footer');
	}

	public function langEnlish()
	{
		$data = [
			'lang'  => 'en',
			'registerText' => 'registration'
	  	];
		echo view('templates/header',$data);
		echo view('home-en');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
