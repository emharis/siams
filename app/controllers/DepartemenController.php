<?php

namespace App\Controllers;

class DepartemenController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Absensi Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'AbsensiController@showWelcome');
	|
	*/

	public function getIndex(){
		$debs = \App\Models\Departemen::all();
		return \View::make('master.departemen.index',array(
				'debs' => $debs
			));
	}
	
	public function getNew(){
		return \View::make('master.departenen.new');
	}
        
	public function getAbsen(){
            
		return \View::make('master.departemen.absen');
	}

}
