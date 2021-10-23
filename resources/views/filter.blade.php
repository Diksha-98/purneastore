<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  shadow" style="background-color: #FD5B03">
        <div class="container">
    <h4 style="font-style: italic; color:white;">purniastore</h4>
        </div>
    </nav>
    <div class="container">
        <div class="col-lg-12">
            
    <div class="row mt-5">
    
     
        <div class="col-lg-6">
            @foreach ($data as $item)
            @php
                $a = $item->id;
            @endphp
                <div class="card-body bg-light">
                    <img src="{{asset('image/'.$item->image)}}" width="100%" height="300px">
                    <h4>{{$item->b_name}}</h4>
                    <p class="text-danger"><h4><i class="bi bi-telephone">Contact:{{$item->contact}}</i></h4></p>
                    <p class="text-danger"><h4><i class="bi bi-geo-alt-fill">Address:{{$item->address}}</i></h4></p>
                   <p class="text-danger"><h5><i class="bi bi-hourglass">Open Time:{{$item->open_time}}</i></h5></p>
                    <p class="text-danger"><h5><i class="bi bi-hourglass-bottom">Close Time:{{$item->close_time}}</i></h5></p>
                      
                    <p class="border-0"><a href="{{url('/like',$item->id)}}" 
                        class="btn btn-info btn-small text-light">{{$item->like}}<i class="bi bi-hand-thumbs-up-fill"></i></a><small></small>
                    </p>
                    <p class="border-0 "><a href="{{url('/dislike',$item->id)}}" 
                        class="btn btn-info btn-small text-light">{{$item->dislike}}<i class="bi bi-hand-thumbs-down-fill"></i></a><small></small>
                    </p>
                  
                </div>
               
            </div>
            <div class="col-3">
         
<button type="button" class="btn btn-dark text-white w-10" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-pencil-fill">write review</i>
</button>
   
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="card">
            <form action="{{route('insertreview')}}" method="POST">
                @csrf
               <input type="hidden" name="business_id" value="{{$a}}">

                <div class="mb-3">
                    <label for="">like</label>
                   
                    <div class="rate">
                        <input type="radio" id="star5" name="like" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="like" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="like" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="like" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="like" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                 </div>
            
                <div class="mb-3">
                    <label for="">comment</label>
                  <textarea name="comment"cols="30" rows="10" class="form-control" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="">name</label>
                 <input type="text" class="form-control" name="name">
                </div>
               
                <div class="mb-3">
                    <input type="submit" class="btn w-100" style="background-color: #FD5B03">
                </div>
                
            
               
            </form>

            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
      
      </div>
    </div>
  </div>

    
        @endforeach
      
        </div>
        <div class="col-3">
        <table class="table">
            @foreach($review as $item)
        
            @php
                $a = $item->id;
            @endphp
            <tr>
             <?php
             $s = $item->like;
             ?>
             <th class="border-0 text-capitalize m-0 p-0"><h3>Name:
                {{$item->name}}</h3>
             @for($i =1;$i<=$s;$i++)
           <i class="fa fa-star p-0 m-0" aria-hidden="true" style="color:#ffff19"></i>
           
             @endfor
             </th>
            </tr>
            <tr>
                <td class="border-0"><h5>Comment:{{$item->comment}}</td></h5>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
       
    </div>
    
</div>
<div class="col-lg-5">
    <div class="card border-0" style="background-color:white">
        <div class="card-body mt-1">
            <?php
            $v = $item->type_of_service;
            $a = $item->id;
            ?>
            @if($v==0)
            <a href="" btn  btn-secondary  disabled="mb-3 px-5">offline service</a>

            @else
            <a href="{{$item->add_link}}" class="btn btn-success px-5 py-2">online service</a>
            @endif
            <p>
               
            </p>
        
        </div>

</div>
<div class="row">
    <div class="col-lg-12 mt-4">
        
    </div>
</div>
    </div>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
   

</body>
</html>