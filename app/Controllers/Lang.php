<?php namespace App\Controllers;

class Lang extends BaseController
{
	public function index()
	{
		$session = session();
      $locale = $this->request->getLocale();
      $session->remove('lang');
      $session->set('lang',$locale);
      $url = base_url($locale);
      return redirect()->to($url);
	}

	//--------------------------------------------------------------------

}
