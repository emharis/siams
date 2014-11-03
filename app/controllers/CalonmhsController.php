<?php

namespace App\Controllers;

class CalonmhsController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Calonmhs Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'CalonmhsController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('pmb.calon.index');
	}
	
	public function getNew(){
		return \View::make('pmb.registrasi.new');
	}

}
