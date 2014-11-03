<?php

namespace App\Controllers;

class AbsensipegController extends \BaseController{

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
            $abs = \App\Models\Absensipeg::orderBy('created_at','desc')->get();
		return \View::make('pegawai.absensi.index',array(
                    'absens' => $abs
                ));
	}
	
	public function getNew(){
		return \View::make('pegawai.absensi.new');
	}
        
        public function getAbsen(){
            
            return \View::make('pegawai.absensi.absen');
        }

}
