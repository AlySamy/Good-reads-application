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


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">All Posts</a>
                <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">All Users</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<h1>{{$user->name}}</h1>

@foreach ( $user->post as $post )

<div class="card" style="width: 18rem;">
    <div class="card-header">
      post
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">id: {{$post->id}}</li>
      <li class="list-group-item">title: {{$post->title}}</li>
      <li class="list-group-item">posted by: {{$post->description}}</li>
      <li class="list-group-item">created at: {{$post->reacts}}</li>
    </ul>
  </div>
  @endforeach


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


