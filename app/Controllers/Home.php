<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $locale = service('language')->getLocale();
		// echo lang('lang.apples',[5]).'<br>';
		// echo lang('lang.men',[5,10]);
		echo view('templates/header');
		echo view('home');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
