<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\Photo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategoyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(category $category)
    {
        $categoryarray = category::get();
         $productarray =  product::get();
        return view('category.index')->with(compact('productarray'))->with(compact('categoryarray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'detail'=>'required',
    ]);
   


    category::create($request->all());
    return redirect()->route('category.index')->with('add','Record added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {   
        $product_details = category::findOrFail($category);
        //dd($product_details->getProduct);
      $productarray =$product_details->getProduct;
     
     
        // $productarray = DB::table('products')
        //     ->where('categoy_id',$category->id)
        //     ->get();
        $categoryarray = category::get();
        
        // //   $productarray =  product::get();
        return view('category.index')->with(compact('productarray'))->with(compact('categoryarray'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
            // dd($category->id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index')->with('add','Record updated');
         //dd($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('add','Record deleted ');
    }
}
