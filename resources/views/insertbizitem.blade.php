<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>purniastore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  shadow" style="background-color: #FD5B03">
        <div class="container">
    <h4 style="font-style: italic; color:white;">purniastore</h4>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <div class="col-8 mx-auto">
            <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                   <label for="">user_id</label>
                    <select name="user_id" id="" class="form-control">
                     @foreach($user as $u)
                     <option value="{{$u->id}}">{{$u->name}}</option>
                     @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">business_id</label>
                    <select name="business_id" id="" class="form-control">
                        @foreach($business as $b)
                        <option value="{{$b->id}}">{{$b->b_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">contact</label>
                    <input type="text" name="contact" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">state</label>
                    <input type="text" name="state" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">city</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">b_name</label>
                    <input type="text" name="b_name" class="form-control">
                </div>
               
                <div class="mb-3">
                    <label for="">open_time</label>
                    <input type="time" name="open_time" class="form-control">
                </div>
              
                <div class="mb-3">
                    <label for="">close_time</label>
                    <input type="time" name="close_time" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="">type_of_service</label>
                    <select name="type_of_service" class="form-control">
                        @foreach($business as $b)
                        <option value="{{$b->id}}">{{$b->b_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="mb-3">
                    <label for="">descripiton</label>
              <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
        <div class="mb-3">
            <input type="submit" name="submit" class="btn w-100" style="background-color:#FD5B03">
        </div>
              
            </form>

            </div>
        </div>
    </div>
    
</body>
</html>