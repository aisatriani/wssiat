@extends('layouts.master')

@section('breadcrumbs')

    <ol class="breadcrumb">
        <li><a href="index.html">Admin Panel</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Overview</li>
        <li><a href="sign-in.html">Sign In Form</a></li>
    </ol>

@endsection

@section('content')

<h1>Daftar Dosen</h1>

<div class="table-responsive">
    <h4 class="margin-bottom-15">New Users Table</h4>
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>nidn</th>
            <th>nama</th>
            <th>latitude</th>
            <th>longitude</th>
            <th>active</th>
            <th>action</th>


        </tr>
        </thead>
        <tbody>
        <?php $id = 1; ?>
        @foreach($lokasidosen as $lokasi)
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $lokasi->nidn}}</td>
            <td>{{ $lokasi->nama }}</td>
            <td>{{ $lokasi->latitude }}</td>
            <td>{{ $lokasi->longitude }}</td>
            <td>{{ $lokasi->active }}</td>
            <td><a href="{{ url('lokasidosen',$lokasi->nidn) }}" data-method="delete" data-confirm="Yakin ingin menghapus data ini??" class="btn btn-info">Hapus</a></td>


        </tr>
        <?php $id++ ?>
            @endforeach



        </tbody>
    </table>

@endsection