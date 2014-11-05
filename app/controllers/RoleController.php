<?php

namespace App\Controllers;

class RoleController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Role Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'RoleController@showWelcome');
	|
	*/

	public function getIndex(){
		return \View::make('master.role.index');
	}
	
	public function getNew(){
		return \View::make('master.role.new');
	}

}
