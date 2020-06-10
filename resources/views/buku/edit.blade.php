<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{url('/')}}">Home </a>
      <a class="nav-item nav-link" href="{{url('/buku')}}">Insert Buku</a>
      <!-- <a class="nav-item nav-link" href="{{url('/about')}}">Edit Buku</a> -->
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="mt-5">Form Edit Data Buku</h1>
            <form method="POST" action="/buku/{{$buku->id}}/edit">
            {{method_field('PATCH')}}
            @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control class @error('judul') is-invalid @enderror" id="judul" placeholder="masukkan juduk buku" name="judul" value="{{$buku->judul}}">
                   @error('judul')
                    <div class="invalid-feedback">
                        {{$message}}
                     </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text" class="form-control" id="jenis" placeholder="masukkan jenis buku" name="jenis" value="{{$buku->jenis}}">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="masukkan jumlah buku" name="jumlah" value="{{$buku->jumlah}}">
                    @error('jumlah')
                    <div class="invalid-feedback">
                        {{$message}}
                     </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label> 
                    <input type="text" class="form-control" id="keterangan" placeholder="masukkan keterangan buku" name="keterangan" value="{{$buku->keterangan}}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Buku</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>