<?php namespace App\Controllers;
 
 use CodeIgniter\Controller;
 
 class Product extends Controller
 {
 	public function index()
 	{
 		// $this->load->view('Pages/Product');
 		return view('Pages/Product');
 	}
 }
