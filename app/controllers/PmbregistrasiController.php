<?php

namespace App\Controllers;

class PmbregistrasiController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Prodi Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'ProdiController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('pmb.registrasi.index');
	}
	
}
