<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    


    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#FD5B03 ">  
        <div class="container">
            <a href="" class="navbar-brand" style="font-style: italic;">purniastore</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="" class="d-flex mx-auto" name="search">
                        <input type="search" name="search" class="form-control" size="80">
                        <input type="submit" name="find" class="btn btn-success">
        
                    </form>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item"><a href="" class="nav-link ">{{Auth::user()->name}}</a></li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" value="logout" class="btn" style="background-color:#FD5B03 ">
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item ms-5"><a href="/login" class="{{route('login')}}" class="nav-link text-light" style="color: white;">login</a></li>
                <li class="nav-item ms-5"><a href="/register" class="{{route('register')}}" class="nav-link text-light" style="color: white;">Register</a></li>
                @endguest
            </ul>
        </div>

    </nav>
    <div class="container-fluid" style="<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pic/restaurant.jpg" class="img-cover" alt="..." width="100%" height="300px" style="background-repeat: no-repeat; background-size: content;" >
          </div>
          
          <div class="carousel-item">
            <img src="pic/shopfront.webp" class="img-cover" alt="..."width="100%" height="300px" style="background-repeat: no-repeat; background-size: content;">
          </div>
          <div class="carousel-item">
            <img src="pic/real_estate.jpg" class="img-cover" alt="..."width="100%" height="300px" style="background-repeat: no-repeat; background-size: content;">
          </div>
          <div class="carousel-item">
            <img src="pic/pic.webp" class="img-cover" alt="..."width="100%" height="300px" style="background-repeat: no-repeat; background-size: content;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
       
        </div>
      </div>


    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">

                <div class="card-header">Category</div>
                Total Category:({{$business->count()}})
                <div class="list-group-item list-group-item-action" aria-current="true">
                    @foreach($business as $item)
                    <a href="{{route('show',["slug"=>$item->slug])}}" class="list-group-item list-gruop-item-action">{{$item->b_name}}<span class="float-end">&raquo;</span></a>
                    @endforeach
            </div>
        </div>
        
    
        <div class="col-lg-8">
        <h5 class="text-center"> Total Item: ({{$bitem->count()}})</h5>
        <div class="card">
          <div class="row">
      
            @foreach ($bitem as $item)
         
            <div class="col-6">
              <div class="card ms-5 mt-5">
                
                
               <a href="{{route('filter',['id'=>$item->id])}}"><img src="{{asset('image/'.$item->image)}}" class="img-cover" width="100%" height="300px"></a>
                       
               <p class="text-danger"><h4><i class="bi bi-telephone">Contact:{{$item->contact}}</i></h4></p>
                           <p class="text-danger"><h4><i class="bi bi-geo-alt-fill">Address:{{$item->address}}</i></h4></p>
                          <p class="text-danger"><h5><i class="bi bi-hourglass">Open Time:{{$item->open_time}}</i></h5></p>
                           <p class="text-danger"><h5><i class="bi bi-hourglass-bottom">Close Time:{{$item->close_time}}</i></h5></p>
                           <p class="text-danger"><h5><i class="bi bi-geo-alt-fill">City:{{$item->city}}</i></h5></p>
                             
      
                  
                </div>  
              
            </div>
                   
            @endforeach
           
            
        </div>
          </div>
    </div>
        
    </div>
    </div>
     
    
    
        
   
    
  
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>