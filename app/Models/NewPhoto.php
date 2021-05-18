<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPhoto extends Model
{
    use HasFactory;
    protected $table='photos';
    function getProduct(){
        return $this->hasMany('App\Models\Photo','product_id');
    }
    
}
