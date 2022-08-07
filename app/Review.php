<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
    public function user()   //riview1 対 user1
    {
    return $this->belongsTo('App\User');
    }

    public function shops()   //riview1 対 venue1
    {
    return $this->belongsTo('App\Shop');
    }
    
 
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()   //riview1 対 image1 //
    {
    return $this->hasMany('App\Image');
    }
    
    
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'user_id',
        'visited_at',
        ];
        
        
}
