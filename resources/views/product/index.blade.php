@extends('product.layout')

@section('content')
<h1>hhhhhhhhhhhhii</h1>
    <!-- <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('category.create')}}">Create </a>
                <h1>category </h1>
            </div>
        </div>
    </div>
    <br>
    @if($msg=Session::get('add'))
        <div class="alet alert-success">
            <p> {{$msg}}</p>
        </div>
    @endif
    <table class="table table-success table-striped">
        <tr>
            <th> ID</th>
            <th> Name</th>
            <th>Price </th>
            <th> Category</th>
            <th> Action</th>
        </tr>
            
        @foreach ($productarray as $data)
        <tr>
            <td>{{$data->id}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->price}} </td>
            <td> {{$data->categoy_id}} </td>
            <td> <a class="btn btn-primary" href="{{route('category.edit',$data->id)}}"> Edit</a>
              <a class="btn btn-primary" href="{{route('product.index',$data->id)}}"> products</a>
           
            <form action="{{route('category.destroy',$data->id)}}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete</button>
            </form>
             </td>
        </tr>
        @endforeach
    </table> -->
@endsection
