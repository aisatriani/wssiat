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
            <th>NIDN</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Domisili</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $dosen)
        <tr>
            <form action="{{ url(route('dosen.location.update',$dosen['NIDN'])) }}" METHOD="POST">
                {{ csrf_field() }}
            <td>{{ $num }}</td>
            <td>{{ $dosen['NIDN'] }}</td>
            <td>{{ $dosen['NIP'] }}</td>
            <td>{{ $dosen['NAMA'] }}</td>
            <td><input type="text" name="latitude" VALUE="{{  ($res = \App\LokasiDosen::where('nidn',$dosen['NIDN'])->first() ) ? $res->latitude : '' }}"></td>
            <td><input type="text" name="longitude" VALUE="{{  ($res = \App\LokasiDosen::where('nidn',$dosen['NIDN'])->first() ) ? $res->longitude : '' }}"></td>
            <td><select name="kabkot">
                    <option value="KOTA GORONTALO">KOTA GORONTALO</option>
                    <option value="KAB. GORONTALO">KAB. GORONTALO</option>
                    <option value="BONE BOLANGO">BONE BOLANGO</option>
                    <option VALUE="BOALEMO">BOALEMO</option>
                    <option value="POHUWATO">POHUWATO</option>
                    <option value="GORONTALO UTARA">GORONTALO UTARA</option>
                </select></td>
            <td>

                    <button type="submit" class="btn btn-info">SIMPAN</button>

            </td>
            </form>

        </tr>
        <?php $num++ ?>
            @endforeach



        </tbody>
    </table>

@endsection