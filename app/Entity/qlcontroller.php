<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class qlcontroller extends Model
{
    protected $table = 'qlcontrollers';
    public function module(){
        return $this->belongsTo('App\Entity\qlmodules','id_module','id');
    }
}
