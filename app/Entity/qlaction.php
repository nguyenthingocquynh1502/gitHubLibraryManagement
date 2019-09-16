<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class qlaction extends Model
{
    protected $table = 'qlactions';
    public function controller(){
        return $this->belongsTo('App\Entity\qlcontroller','controllerid','id');
    }
}
