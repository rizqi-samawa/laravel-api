<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Manga Script</title>
  </head>
  <body class="bg-secondary">
    {{-- navbar --}}
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand  fw-bold" href="/">Manga Script</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/crud">CRUD</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- navbar --}}

    {{-- crud --}}
      <div class="container mt-2 bg-dark p-3 rounded">
        <div class="text-end">
            <a href="/crud/create" class="btn btn-success">Create</a>
        </div>
        {{-- tables --}}
            <table class="table table-dark mt-3">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Synopsis</th>
                        <th scope="col">Released</th>
                        <th scope="col">Author</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Score</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dta)
                        <tr>
                            <td>
                              <img src="{{ url('/images/'. $dta->image) }}" alt="None" width="150px">
                            </td>
                            <td>{{ $dta->title }}</td>
                            <td>{{ $dta->synopsis }}</td>
                            <td>{{ $dta->released }}</td>
                            <td>{{ $dta->author }}</td>
                            <td class="text-center">{{ $dta->status }}</td>
                            <td class="text-center">{{ $dta->score }}</td>
                            <td class="text-center">
                                <a href="/crud/{{ $dta->id }}/edit" class="btn btn-warning"></a>
                                <a href="/crud/{{ $dta->id }}/delete" class="btn btn-danger"></a>
                                {{-- <form action="/crud/{{ $dta->id }}" method="POST">
                                  @method('DELETE')
                                  <input type="submit" value="" class="btn btn-danger"> 
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{-- tables --}}
        <div class="text-dark text-decoration-none text-end">
        </div>
      </div>
    {{-- crud --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>