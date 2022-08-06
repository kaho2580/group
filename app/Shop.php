<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function reviews()   //venue1 対 review多
    {
    return $this->hasMany('App\Review');
    }


    public function users()   //venue 多 対 user多
    {
    return $this->belongsToMany('App\User');
    }
}
