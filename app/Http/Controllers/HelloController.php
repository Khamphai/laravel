<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HelloController extends Controller {

	//
	

	public function index(){
		$title = 'Laravel 5 Traning';
		$subtitle = 'An introduction to Laravel 5';
		
		return view('hello.index')
				->withTitle($title)
				->withSubtitle($subtitle);
	}

}
