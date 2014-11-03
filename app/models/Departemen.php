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
class Departemen extends \Eloquent{
    
    protected $table = 'departemen';
    
    public function pegawais(){
		$this->hasMany('App\Models\Pegawai');
	}
    
}
