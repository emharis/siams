<?php

namespace App\Controllers;

class TunjanganController extends \BaseController {

	/*
	 |--------------------------------------------------------------------------
	 | Default Tunjangan Controller
	 |--------------------------------------------------------------------------
	 |
	 | You may wish to use controllers instead of, or in addition to, Closure
	 | based routes. That's great! Here is an example controller method to
	 | get you started. To route to this controller, just add the route:
	 |
	 |	Route::get('/', 'TunjanganController@showWelcome');
	 |
	 */

	public function getIndex() {
		$tunjangans = \App\Models\Tunjangan::all();
		$tunjangans = \DB::select("select tj.id,tj.created_at,tj.updated_at,tj.nama, (select tdn.nilai from tunjangan_detil_nilai as tdn where tdn.tunjangan_id = tj.id order by tdn.created_at desc limit 1) as nilai, (select tdn.max from tunjangan_detil_nilai as tdn where tdn.tunjangan_id = tj.id order by tdn.created_at desc limit 1) as max from jabatan as tj");
		return \View::make('master.tunjangan.index', array('tunjangans' => $tunjangans));
	}

	public function getNew() {
		return \View::make('master.tunjangan.new');
	}

}
