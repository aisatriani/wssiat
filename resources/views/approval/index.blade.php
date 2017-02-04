@extends('layouts.master')

@section('breadcrumbs')

    <ol class="breadcrumb">
        <li><a href="index.html">Admin Panel</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">KONTRAK KRS</li>

    </ol>

@endsection

@section('content')

    <div class="row">
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    		<h4>Daftar Mahasiswa Yang telah mengontrak KRS</h4>

            <table class="table table-striped table-hover">
            	<thead>
            		<tr>
            			<th>no</th>
            			<th>nim</th>
            			<th>nama</th>
            			<th>action</th>
            		</tr>
            	</thead>
            	<tbody>
				<?php $no = 1 ?>
				@foreach($kontrak as $k)
            		<tr>
            			<td>{{ $no }}</td>
            			<td>{{ $k->nim }}</td>
            			<td>{{ \App\Api::getNamaMhs($k->nim) }}</td>
            			<td><a href="{{ url('approve',$k->nim) }}" class="btn-sm btn-primary">Lihat</a></td>
            		</tr>
					<?php $no++ ?>
					@endforeach
            	</tbody>
            </table>

    	</div>
    </div>


@endsection