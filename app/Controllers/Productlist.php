<?php namespace App\Controllers;
 
 use CodeIgniter\Controller;
 
 class Productlist extends Controller
 {
 	public function index()
 	{
 		return view("Pages/ProductList");
 	}
 }