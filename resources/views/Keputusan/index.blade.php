@extends('base')
@section('content')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container py-5">
    <div class="row">
        <div class="col-6 bg-light">
            <h3>KEPUTUSAN</h3>

            <div class="col-6">

                <form method="POST" action="/keputusans">
                    @csrf
                    <div class="form-group">
                        <label for="">Jenis Pentaksiran :</label>
                        <input class="form-control mb-3" type="text" name="jenis_pentaksiran">
                        <label for="">TahunTingkatan ID :</label>
                        <input class="form-control mb-3" type="text" name="tahuntingkatan_id">
                        <label for="">Subjek :</label>
                        <input class="form-control mb-3" type="text" name="subjek">
                        <label for="">GRED :</label>
                        <input class="form-control mb-3" type="text" name="gred">

                    </div>
                    <input type="hidden" name="keputusan_id" value=1>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>

                <div class="row my-4">
                    <div class="col-12">
                        <h3>Senarai Keputusan</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Jenis Pentaksiran</th>
                                <th>TahunTingkatan ID</th>
                                <th>Subjek</th>
                                <th>Gred</th>

                            </tr>
                            @foreach ($keputusans as $keputusan)
                            <tr>
                                <td>{{ $keputusan['jenis_pentaksiran'] }}</td>
                                <td>{{ $keputusan['tahuntingkatan_id'] }}</td>
                                <td>{{ $keputusan['subjek'] }}</td>
                                <td>{{ $keputusan['gred'] }}</td>


                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
          </div>

@stop

      