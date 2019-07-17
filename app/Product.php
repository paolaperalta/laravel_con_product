<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function size()
    // {
    //     return $this->belongsTo('App\Size');
    // }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
