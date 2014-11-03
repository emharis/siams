<?php

namespace App\Controllers;

class RuangController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Ruang Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'RuangController@showWelcome');
	|
	*/

	public function getIndex(){
		$ruangs = \App\Models\Ruang::all();
		return \View::make('master.ruang.index',array(
			'ruangs'=>$ruangs
		));
	}
	
	public function getNew(){
		return \View::make('master.ruang.new');
	}

}
