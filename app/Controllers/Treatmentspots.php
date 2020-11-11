<?php namespace App\Controllers;
 
 use CodeIgniter\Controller;
 
 class Treatmentspots extends Controller
 {
 	public function index()
 	{
 		// $this->load->view('Pages/Product');
 		return view('Pages/TreatmentSpots');
 	}
 }
