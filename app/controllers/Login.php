<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{
    
    public function login()
    {
        $this->home('home/index');
    }

    public function logout()
    {
        $data['row_index'] = "Ini file app/controllers/Dashboard.php - index()";
		$this->dashboard('dashboard/index', $data);
    }
	
}