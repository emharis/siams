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
class Jabatan extends \Eloquent{
    
    protected $table = 'jabatan';
    
    public function pegawais(){
		$this->hasMany('App\Models\Pegawai');
	}
	
	public function gapoks(){
		return $this->hasMany('App\Models\Gapok');
	}
    
}
