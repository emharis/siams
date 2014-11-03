<?php

namespace App\Controllers;

class MahasiswaController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Mahasiswa Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'MahasiswaController@showWelcome');
	|
	*/

	public function getIndex(){
            $mahasiswas = \App\Models\Mahasiswa::all();
		return \View::make('master.mahasiswa.index',array(
                    'mahasiswas'=>$mahasiswas
                ));
	}

}
