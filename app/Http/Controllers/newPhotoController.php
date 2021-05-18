<?php

namespace App\Http\Controllers;
use App\Models\NewPhoto;
use App\Models\Product;
use Illuminate\Http\Request;

class newPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        dd($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //return view('photo.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         
        $id=$request->Product_Id;
       
         $size=$request->file('image')->getSize ();
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/',$name);
        
        $NewPhoto = new NewPhoto();
        $NewPhoto->name=$name;
        $NewPhoto->size=$size;
         $NewPhoto->product_id=$id;
         
         $NewPhoto->save();
        
        $poto_details = NewPhoto::findOrFail($id);
        $photoarray =$poto_details->getProduct;
       $products_details = Product::findOrFail($id);
       
    
      return view('photo.view')->with(compact('photoarray'))->with(compact('products_details'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewPhoto  $newPhoto
     * @return \Illuminate\Http\Response
     */
    public function show( $product_id)
    {
        $product_details = Product::findOrFail($product_id);
       
        return view('photo.upload')->with(compact('product_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewPhoto  $newPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(NewPhoto $newPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewPhoto  $newPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewPhoto $newPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewPhoto  $newPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewPhoto $newPhoto)
    {
        //
    }
}
