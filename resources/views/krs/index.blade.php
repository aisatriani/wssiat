@extends('layouts.master')

@section('breadcrumbs')

    <ol class="breadcrumb">
        <li><a href="index.html">Admin Panel</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">KONTRAK KRS</li>

    </ol>

@endsection

@section('content')

<h1>KONTRAK KRS</h1>
<br>
<span>KODE PRODI {{ $response['data'][0]['KODEPRODI'] }}</span>
<br>
<span>PRODI {{ $response['data'][0]['PRODI'] }}</span>
<br>
<span>TAHUN AKADEMIK {{ $_GET['tahun'] }}</span>
<br>
<span>SEMESTER {{ $_GET['semester'] }}</span>
<br>
<br>
<br>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Kode Makul</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Kontrak</th>

        </tr>
        </thead>
        <tbody>
        @foreach($response['data'] as $data)
            @foreach($data['MAKUL'] as $mk)
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $mk['KODEMAKUL'] }}</td>
            <td>{{ $mk['NAMAMAKUL'] }}</td>
            <td>{{ $mk['SMT'] }}</td>
            <td><input type="checkbox"></td>


        </tr>
        <?php $id++ ?>
                @endforeach
            @endforeach



        </tbody>
    </table>

</div>

@endsection