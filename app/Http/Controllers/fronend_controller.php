<?php 

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class Fronend_controller extends Controller{
	
	function __construct(){
		
	}

	public function index(){
		return view('landingpage');
	}
}