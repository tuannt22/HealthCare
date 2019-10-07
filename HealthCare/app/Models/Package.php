<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $table = 'packages';

    public function services(){
    	return $this->hasOne('App\Models\Service', 'id_packages', 'id');
    }
}
