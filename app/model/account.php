<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    public function user(){
        return $this->belongsTo('App\user');
    }
}
