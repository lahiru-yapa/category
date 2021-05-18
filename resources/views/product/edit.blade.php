@extends('product.layout')

@section('content')
<div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h1>Products </h1>
            </div>
        </div>
    </div>
<form action="{{route('product.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">categoy_id </label>
    <input type="text" class="form-control" name="categoy_id " value="{{$product->categoy_id }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="text" class="form-control" name="price" value="{{$product->price}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="{{route('category.index')}}">Back</a>
</form>
@endsection