<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Home'
		];
		return view('layout/Home', $data);
	}
}
