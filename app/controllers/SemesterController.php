<?php

namespace App\Controllers;

class SemesterController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Semester Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'SemesterController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('master.semester.index');
	}

}
