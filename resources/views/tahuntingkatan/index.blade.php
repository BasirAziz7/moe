@extends('base')
@section('content')

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container py-5">
<div class="row">
<div class="col-6 bg-light">
<h3>Senarai Tahun/Tingkatan</h3>

<div class="col-6">

<form method="POST" action="/tahuntingkatans">
@csrf
                <div class="form-group">
                    <label for="">Nama Sekolah :</label>
                    <input class="form-control mb-3" type="text" name="nama_sekolah">
                    <label for="">Umur :</label>
                    <input class="form-control mb-3" type="text" name="umur">
                    <label for="">Jantina :</label>
                    <input class="form-control mb-3" type="text" name="jantina">
                    <label for="">Negeri :</label>
                    <input class="form-control mb-3" type="text" name="negeri">
                    <label for="">Peringkat :</label>
                    <input class="form-control mb-3" type="text" name="peringkat">
                    <label for="">ID :</label>
                    <input class="form-control mb-3" type="text" name="id">
                
                </div>
                <input type="hidden" name="tahuntingkatan_id" value=1>
                <button class="btn btn-primary" type="submit">Tambah</button>
            </form>

            <div class="row my-4">
        <div class="col-12">
            <h3>Senarai Tahun/Tingkatan</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Nama Sekolah</th>
                    <th>Umur</th>
                    <th>Jantina</th>
                    <th>Negeri</th>
                    <th>Peringkat</th>
                    <th>ID</th>
                    
                </tr>
                @foreach ($tahuntingkatans as $tahuntingkatan)
                <tr>
                    <td>{{ $tahuntingkatan['nama_sekolah'] }}</td>
                    <td>{{ $tahuntingkatan['umur'] }}</td>
                    <td>{{ $tahuntingkatan['jantina'] }}</td>
                    <td>{{ $tahuntingkatan['negeri'] }}</td>
                    <td>{{ $tahuntingkatan['peringkat'] }}</td>
                    <td>{{ $tahuntingkatan['id'] }}</td>
                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<div class="container mt-5">
        <form action="/fails" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Muat naik gambar pelajar</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Files
            </button>
        </form>
     
    </div>





@stop


