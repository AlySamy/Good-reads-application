<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}"> Posts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <div class="card" style="width: 18rem;">
  <div class="card-header">
    post
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">id: {{$Post->id}}</li>
    <li class="list-group-item">title: {{$Post->title}}</li>
    <li class="list-group-item">posted by: {{$Post->posted_by}}</li>
    <li class="list-group-item">created at: {{$Post->created_at}}</li>
  </ul>
</div>


<form action="{{ route('store'}}" method="POST">


    @csrf

  <div class="form-group">
    <label for="exampleInputPassword1">title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="title">
    @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="posted_by">posted by</label>
    <input type="text" class="form-control" id="posted_by" name="posted_by" >
    @error('posted_by')
       <div class="alert alert-danger">{{ $message }}</div>
     @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

