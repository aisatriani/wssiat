@extends('layouts.master-noside')

@section("content")
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal templatemo-signin-form" role="form" action="{{ url('login') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-md-12">
                <label for="jenis_user" class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jenis_user">
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Nim/Nidn">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Sign in" class="btn btn-default">
                </div>
            </div>
        </div>
    </form>

    @endsection