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
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">b_name</label>
                    <input type="text" class="form-control" name="b_name">
                    @error('b_name')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">description</label>
                  <textarea name="description" id="" cols="30" rows="10" class="form-control" ></textarea>
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