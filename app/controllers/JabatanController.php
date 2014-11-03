<?php

namespace App\Controllers;

class JabatanController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Jabatan Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'JabatanController@showWelcome');
	|
	*/

	public function getIndex(){
		$jabs = \App\Models\Jabatan::all();
		return \View::make('master.jabatan.index',array(
		'jabs'=>$jabs
		));
	}
	
	public function getNew(){
		return \View::make('master.jabatan.new');
	}

}
