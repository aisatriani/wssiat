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
			<form method="post" action="">
				{{ csrf_field() }}
            <table class="table table-striped table-hover">
            	<thead>
            		<tr>
            			<th>no</th>
            			<th>KodeMakul</th>
            			<th>Mata Kuliah</th>
            			<th>Setujui</th>
            		</tr>
            	</thead>
            	<tbody>
				<?php $no = 1 ?>
				@foreach($kontrak as $k)
            		<tr>
            			<td>{{ $no }}</td>
            			<td>{{ $k->kodemakul }}</td>
            			<td>{{ $k->namamakul }}</td>
            			<td>

							{{ Form::select("setujui[$k->nim][$k->kodemakul]",$arrSetujui,$k->setujui, ($k->setujui == 1) ? ['disabled'] : []) }}

						</td>
            		</tr>
					<?php $no++ ?>
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


@endsection

@push('js')
<script>

	$(function(){




	});

</script>
@endpush