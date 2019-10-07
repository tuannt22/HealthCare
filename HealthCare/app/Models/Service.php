<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table='services';

    public function packages(){
    	return $this->belongsTo('App\Models\Package', 'id_packages', 'id');
    }
}
