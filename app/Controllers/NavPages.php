<?php namespace App\Controllers;

use CodeIgniter\Controller;

class NavPages extends Controller
{
	// public function view()
	// {
	// 	$page = "home";
	// 	if (!file_exists(APPPATH.'views/Pages/'.$page.'.php')) {
	// 		show_404();
	// 	}
	// 	$this->load->view('Pages/Product');
	// }
	public function view()
	{
		
		// return view('index');
		$this->load->view('Pages/Product');
	}
}