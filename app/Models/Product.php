<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'categoy_id','name','price'
    ];
    function getProduct(){
        return $this->hasMany('App\Models\Photo','product_id');
    }
    
}
