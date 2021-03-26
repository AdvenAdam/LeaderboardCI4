<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'About',
			'isi' => ' Ini Halaman About '
		];

		return view('About', $data);
	}
}
