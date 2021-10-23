
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  shadow" style="background-color: #FD5B03">
        <div class="container">
    <h4 style="font-style: italic; color:white;">purniastore</h4>
        </div>
    </nav>
    <div class="container">
        <div class="col-lg-12">
            <h4 class="text-center">product   ({{$data->count()}})</h4> 
            
    <div class="row mt-5">
    
        @foreach ($data as $item)
        <div class="col-lg-6">
            
            <div class="card border rounded-circle">
                <img src="{{asset('image/'.$item->image)}}" width="100%" height="200px" class="img-cover border rounded-circle">
            </div>
                <div class="card-body bg-light">
                    <p class="text-danger"><h2>Name:{{$item->b_name}}</h2></p>
                    <p class="text-danger"><h2><i class="bi bi-telephone">Contact:{{$item->contact}}</i></h2></p>
                    <p class="text-danger"><h4><i class="bi bi-geo-alt-fill">Address:{{$item->address}}</i></h4></p>
                   <p class="text-danger"><h5><i class="bi bi-hourglass">Open Time:{{$item->open_time}}</i></h5></p>
                    <p class="text-danger"><h5><i class="bi bi-hourglass-bottom">Close Time:{{$item->close_time}}</i></h5></p>
                      
                    <p class="text-success"><h5><i class="bi bi-geo-alt-fill">State:{{$item->state}}</i></h5></p>
                </div>
               
            </div>
        
    
        @endforeach
    </div>
       
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <h6 class="text-center">Related Products ({{$business->count()}})</h6>  
        </div>
    <div class="col-12 mt-3">
        <div class="row">
            @foreach($business as $item)
            <div class="col-5 mb-2">

                <div class="card">
                    <img src="{{asset('image/'.$item->image)}}" class="card-img-top" style="object-fit:cover;height:340px">
               
                    <div class="card-body">
                        <h4>{{$item->b_name}}</h4>
                        <p class="text-danger"><h2><i class="bi bi-telephone">Contact:{{$item->contact}}</i></h2></p>
                        <p class="text-danger"><h4><i class="bi bi-geo-alt-fill">Address:{{$item->address}}</i></h4></p>
                       <p class="text-danger"><h5><i class="bi bi-hourglass">Open Time:{{$item->open_time}}</i></h5></p>
                        <p class="text-danger"><h5><i class="bi bi-hourglass-bottom">Close Time:{{$item->close_time}}</i></h5></p>
                          
                        <a href="{{route('show',['id'=>$item->id,"bitemId"=>$item->bitem_id])}}" class="nav-link stretched-link"></a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
  
</div> --}}
    </div>
    
    
</body>
</html>