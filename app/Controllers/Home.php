<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		return view('welcome_message');
	}
    
    public function jacob(){
        return view('jacob');
    }

	public function jono(){
        return view('jono');
    }

}
