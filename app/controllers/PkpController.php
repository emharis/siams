<?php

namespace App\Controllers;

class PkpController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Pkp Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'PkpController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('akademik.pkp.index');
	}
	
	public function getNew(){
		return \View::make('akademik.pkp.new');
	}

}
