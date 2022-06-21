<?php

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{

	public function index()
	{
		$this->home('home/index');
	}

	public function show()
	{
		$data['row_show'] = "Ini file app/controllers/Index.php - show()";
		$this->home('home/show', $data);
	}

	public function detail($id)
	{
		$data['row_detail'] = "Ini file app/controllers/Index.php - detail() - " . $id;
		$this->home('home/detail', $data);
	}
}
