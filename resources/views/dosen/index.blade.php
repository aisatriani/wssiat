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
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Edit</th>

        </tr>
        </thead>
        <tbody>
        @foreach($response['data'] as $prodi)
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $prodi['FAKULTAS'] }}</td>
            <td>{{ $prodi['PRODI'] }}</td>
            <td><a href="{{ url(route('dosen.show',$prodi['KODEPRODI'])) }}" class="btn btn-info">Edit</a></td>


        </tr>
        <?php $id++ ?>
            @endforeach



        </tbody>
    </table>

@endsection