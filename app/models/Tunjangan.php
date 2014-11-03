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
class Tunjangan extends \Eloquent{
    
    protected $table = 'tunjangan';
    	
	public function jabatan(){
		return $this->belongsTo('App\Models\Jabatan');
	}
    
}
