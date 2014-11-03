<?php

namespace App\Models;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of takad
 *
 * @author Eries
 */
class Gapok extends \Eloquent{
    
    protected $table = 'gapok';
    
    public function pegawais(){
		return $this->hasMany('App\Models\Pegawai');
	}
	
	public function jabatan(){
		return $this->belongsTo('App\Models\Jabatan');
	}
    
}
