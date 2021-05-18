<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class photoContoller extends Controller
{
    public function create($id){
        $photo=Photo::all();
        return view('photo/upload',compact('photo'));
    }
    public function store( Request $request){
        $size=$request->file('image')->getSize ();
       // dd($size);
         $name = $request->file('image')->getClientOriginalName();
         $request->file('image')->storeAs('public/images/',$name);
         $photo = new Photo();
         $photo->name=$name;
         $photo->size=$size;
         $photo->save();


         return  redirect()->back();

    }

    public function show($photo)
    {   
        dd("hhhh");
    }

}
