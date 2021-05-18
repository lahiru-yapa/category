<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable=[
        'name','detail'
    ];

    function getProduct(){
        return $this->hasMany('App\Models\Product','categoy_id');
    }
}
