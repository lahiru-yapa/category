<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">
     <title>Document</title>
</head>
<body>
    <div  style=" background-color: rgb(182, 221, 109);width:50%;" >
        <div style="   align-items: center;">
    <h1 style="color:blue;  background-color: rgb(107, 69, 69);width:50%">upload your product image</h1>
         
    <h2>product name is :-{{$product_details->name}}</h2>
    
    <form method="POST" action="{{route('photo.store')}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product_name</label>
                <input style="width:50px;" type="text" class="form-control" name="Product_Id" value="{{$product_details->id}}">
            
                <button type="submit" class="btn btn-success"> upload</button>

        </form>
        </div>
    </div>

</div>
</body>
</html>