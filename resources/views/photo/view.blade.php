
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>  This is images Product:{{$products_details->name}}</h1>
    <ul>
        @foreach ($photoarray as $photo)
           {{-- // <li> {{$photo->name}}<img src="{{  asset('storage/images/'.$photo->name) }}" height="200px" width="00px"></li> --}}
            <div class="text-center">
               {{-- // <img src="{{  asset('storage/app/public/images/'.$photo->name) }}" class="rounded" >
                 --}}
                <img src="{{  asset('storage/app/public/images/Screenshot(8).png') }}" class="rounded" >
           
              </div>
    
        @endforeach
    </ul>
</body>
</html>