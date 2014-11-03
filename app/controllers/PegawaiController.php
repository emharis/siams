<?php

namespace App\Controllers;

class PegawaiController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Pegawai Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'PegawaiController@showWelcome');
	|
	*/

	public function getIndex(){
		$pegs = \App\Models\Pegawai::all();
		return \View::make('master.pegawai.index',array(
		'pegs'=>$pegs
		));
	}
	public function getNew(){
		return \View::make('master.pegawai.new');
	}

}
