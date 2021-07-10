<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Perusahaan</title>
  </head>
  <body>
    <h1 class="text-center">Tambah Data Perusahaan</h1>

    <!--content-->
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
        <div class="card-body">
        <form action="/perusahaan/update/{{$data->id}}" method= "POST" enctype = "multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{$data->nama}}">
                @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$data->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Logo</label>
                <input type="file" name="foto" class="form-control">
                @error('foto')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <img class="border border-3 border-secondary rounded" src="{{asset('logo/'.$data->foto)}}" alt="" style="width: 100px">
            <br><button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        </div>
        </div>
        </div>
        </div>
    </div>

    <!--endcontent-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
