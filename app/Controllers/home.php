<?php namespace App\Controllers;

class home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		echo view('/pages/home', $data);
	}

}
