<?php

namespace App\Controllers;

class CutiController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Cuti Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'CutiController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('pegawai.cuti.index');
	}
	
	public function getNew(){
		return \View::make('pegawai.cuti.new');
	}

}
