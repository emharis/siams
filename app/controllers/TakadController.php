<?php

namespace App\Controllers;

class TakadController extends \BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Takad Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'TakadController@showWelcome');
	|
	*/

	public function getIndex(){
            $takads = \App\Models\Takad::orderBy('order','asc')->get();
		return \View::make('master.takad.index',array(
                    'takads'=>$takads
                ));
	}
	
	public function getNew(){
		return \View::make('master.takad.new');
	}
        
        public function postNew(){
            $takad = new \App\Models\Takad();
            $takad->nama = \Input::get('nama');
            $takad->awal = date('Y-m-d',  strtotime(\Input::get('awal')));
            $takad->akhir = date('Y-m-d',  strtotime(\Input::get('akhir')));
            $takad->aktif = \Input::get('aktif');
            $takad->order = \App\Models\Takad::count()+1;
            $takad->save();
            
            return \Redirect::back();
        }

}
