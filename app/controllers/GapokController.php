<?php

namespace App\Controllers;

class GapokController extends \BaseController {

	/*
	 |--------------------------------------------------------------------------
	 | Default Gapok Controller
	 |--------------------------------------------------------------------------
	 |
	 | You may wish to use controllers instead of, or in addition to, Closure
	 | based routes. That's great! Here is an example controller method to
	 | get you started. To route to this controller, just add the route:
	 |
	 |	Route::get('/', 'GapokController@showWelcome');
	 |
	 */

	public function getIndex() {
		$gapoks = \DB::table('gapok_per_jabatan') -> get();
		return \View::make('master.gapok.index', array('gapoks' => $gapoks));
	}

	public function getNew() {
		return \View::make('master.gapok.new');
	}

}
