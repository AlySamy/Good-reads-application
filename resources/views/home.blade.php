
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        button {
            padding:5px;
            border-style:none;
            color:white;
            margin:2px;
        }
        a
        {
            text-decoration:none;
            color:white
        }

    </style>

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

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">desc</th>
            <th scope="col">reacts</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>{{ $post->reacts }}</td>
      <td>
        <button class="btn btn-warning"><a href="{{ route('update.page',['id' => $post->id]) }}">update</a></button>
        <button class="btn btn-primary"><a href="{{ route('view.page',['id' => $post->id]) }}">view</a></button>
        <form action="{{ route('delete.page',['id' => $post->id])}}" method="POST">
          @method("DELETE")
          @csrf
          <button class="btn btn-danger">delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<form action="{{ route('create.page')}}" method="GET">
          <button class="btn btn-success">create</button>
        </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

