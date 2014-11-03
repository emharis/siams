<?php

namespace App\Controllers;

class MatkulController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Matkul Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'MatkulController@showWelcome');
	|
	*/

	public function getIndex(){
            $matkuls = \App\Models\Matkul::all();
		return \View::make('master.matkul.index',array('matkuls'=>$matkuls));
	}
	
	public function getNew(){
		return \View::make('master.matkul.new');
	}

}
