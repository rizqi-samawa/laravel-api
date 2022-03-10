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
      <div class="container mt-2 bg-dark p-3 rounded text-white">
          <div class="border-bottom">
              <h4>Edit Forms</h4>
          </div>
          {{-- form create --}}
            <div class="mt-3">
                <form action="/crud/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="Title" class="form-label fw-bold">Title</label>
                            <input name="Title" type="text" class="form-control" id="Title" placeholder="Title" aria-label="Title" value="{{ $data->title }}" required>
                            <label for="Synopsis" class="form-label fw-bold mt-2">Synopsis</label>
                            <textarea name="Synopsis" class="form-control" id="Synopsis" rows="1" placeholder="Drag if you want to expand the form" required>{{ $data->synopsis }}</textarea>
                            <label for="Released" class="form-label fw-bold mt-2">Released</label>
                            <input name="Released" type="date" class="form-control" id="Released"placeholder="Released" aria-label="Released" value="{{ $data->released }}" required>
                            <label for="Image" class="form-label fw-bold mt-5">Image for Title</label>
                            <input name="Image" class="form-control" type="file" id="Image" value="{{ $data->image }}">
                            <p class="form-text text-light fw-lighter fst-italic">Leave it blank if you don't want to change the image.</p>
                        </div>
                        <div class="col">
                            <label for="Author" class="form-label fw-bold">Author</label>
                            <input name="Author" type="text" class="form-control" id="Author" placeholder="Author" aria-label="Author" value="{{ $data->author }}" required>
                            <label for="Status" class="form-label fw-bold mt-2">Status</label>
                            <select name="Status" class="form-select" id="Status" aria-label="Status" required>
                                <option {{ ($data->status) == 'Ongoing' ? 'selected' : '' }}  value="Ongoing">Ongoing</option>
                                <option {{ ($data->status) == 'Completed' ? 'selected' : '' }}  value="Completed">Completed</option>
                            </select>
                            <label for="Score" class="form-label fw-bold mt-2">Score</label>
                            <input name="Score" type="text" class="form-control" id="Score"placeholder="Score : Example 9.20" aria-label="Score" value="{{ $data->score }}">
                            <div class="text-center">
                                <img src="{{ url('/images/'. $data->image) }}" height="200px" class="my-2 border border-light border-3" />
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="submit" value="update">Update</button>
                        <a href="/crud" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
          {{-- form create --}}
      </div>
    {{-- crud --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>