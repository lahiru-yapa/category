@extends('category.layout')

@section('content')
    <div class="row" >
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
            <th> Code</th>
            <th>Name </th>
            <th> Action</th>
        </tr>
            
        @foreach ($categoryarray as $data)
        <tr>
            <td>{{$data->id}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->detail}} </td>
            <td> <a class="btn btn-primary" href="{{route('category.edit',$data->id)}}"> Edit</a>
                <td> <a class="btn btn-primary" href="{{route('category.show',$data->id)}}"> products</a>
           </td>
           <td>
            <form action="{{route('category.destroy',$data->id)}}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete</button>
            </form>
             </td>
        </tr>
        @endforeach
    </table>

    <a class="btn btn-success" href="{{route('product.create')}}">Create product </a>
   
    <table class="table table-success table-striped">
        <tr>
            <th> ID</th>
            <th> categoy_id</th>
            <th>name </th>
            <th> price</th>
        </tr>
            
        @foreach ($productarray as $item)
        <tr>
            <td>{{$item->id}} </td>
            <td> {{$item->categoy_id}} </td>
            <td> {{$item->name}} </td>
            <td> {{$item->price}} </td>
            <td>
            <form action="{{route('product.destroy',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete</button>
            </form>
             </td>
             <td> <a class="btn btn-primary" href="{{route('product.edit',$item->id)}}"> Edit</a>
             <a class="btn btn-primary" href="{{route('photo.show',$item->id)}}"> photos</a> 
             
             
           
        </tr> 
        
        @endforeach
    </table>
  
@endsection