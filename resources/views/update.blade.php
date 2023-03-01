<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>


<form class="w-50 container" action="{{route('edit.page',$post->id)}}" method="POST" >
@method('PUT')
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input value="{{$post->id}}" name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">

    <div>
    <label for="exampleInputPassword1" class="form-label">desc</label>
    <input value="{{$post->description}}" type="text" name="description" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input value="{{$post->title}}" class="form-control" name="title">
  </div>
  <div class="mb-3">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
