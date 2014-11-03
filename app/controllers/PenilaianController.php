<?php

namespace App\Controllers;

class PenilaianController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Penilaian Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'PenilaianController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('pmb.penilaian.index');
	}
	public function getNew(){
		return \View::make('pmb.penilaian.new');
	}

}
