<?php 

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class Fronend_controller extends Controller{
	
	function __construct(){
		
	}

	public function index(){
		return view('dashboard');
	}

	public function signin(){
		return view('frontend/signin');
	}

	public function signup(){
		return view('frontend/signup');
	}

	public function buyshare(){
		return view('frontend/buyshare');
	}

	public function guestbrowse(){
		return view('frontend/guestbrowse');
	}

	public function about(){
		return view('frontend/about');
	}

	public function contact(){
		return view('frontend/contact');
	}

	
}