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
<span>NIM {{ session('nim') }}</span>
<br>
<span>PA/NIDN {{ session('pa','undefined') }}</span>
<br>
<br>
<br>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        <div class="table-responsive">
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="pull-right" style="padding: 10px">
                        <button type="submit" class="btn btn-default">SIMPAN</button>
                    </div>
                </div>


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
                                <td>{{ key($mk['SKS']) }}</td>
                                <td><input name="kodemakul[]" type="checkbox" value="{{ $mk['KODEMAKUL'] .'.'.$mk['NAMAMAKUL'] }}"></td>

                            </tr>
                            <?php $id++ ?>
                        @endforeach
                    @endforeach



                    </tbody>
                </table>


                <div class="row">
                    <div class="pull-right" style="padding: 10px">
                        <button type="submit" class="btn btn-default">SIMPAN</button>
                    </div>
                </div>


            </form>
        </div>

	</div>
    
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>Daftar matakuliah yang di kontrak</h4>
    	<table class="table table-striped table-hover">
    		<thead>
    			<tr>
    				<th>Mata Kuliah</th>
    				<th>Disetujui</th>
    			</tr>
    		</thead>
    		<tbody>
            @foreach($kontrak as $k)
    			<tr>
    				<td>{{ $k->namamakul }}</td>
    				<td>{{ ($k->setujui == 0) ? 'Belum Disetujui' : 'Disetujui' }}</td>
    			</tr>
                @endforeach
    		</tbody>
    	</table>
    </div>
    
</div>


@endsection