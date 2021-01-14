<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$vistas = view('layouts/header') . view('inicio') . view('layouts/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
