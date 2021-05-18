@extends('product.layout')

@section('content')
<div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h1>category </h1>
            </div>
        </div>
    </div>
<form action="{{route('product.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category_id</label>
    <input type="text" class="form-control" name="Categoy_id">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="text" class="form-control" name="price">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="{{route('category.index')}}">Back</a>
</form>
@endsection