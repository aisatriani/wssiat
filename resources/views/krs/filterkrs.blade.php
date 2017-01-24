@extends('layouts.master')

@section('breadcrumbs')

    <ol class="breadcrumb">
        <li><a href="index.html">Admin Panel</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">KONTRAK KRS</li>

    </ol>

@endsection

@section('content')



<div class="table">
    <div class="row">
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <table class="table table-striped table-hover table-bordered">
                <form action="{{ url('krs') }}" method="get">
                    <tbody>

                    <tr>
                        <td width="200px">TAHUN AKADEMIK</td>
                        <td><select name="tahun" class="form-control">
                                <option value="2010">2010/2011</option>
                                <option value="2011">2011/2012</option>
                                <option value="2012">2012/2013</option>
                                <option value="2013">2013/2014</option>
                                <option value="2014">2014/2015</option>
                                <option value="2015">2015/2016</option>
                                <option value="2016" selected>2016/2017</option>
                                <option value="2017">2017/2018</option>
                                <option value="2018">2018/2019</option>
                                <option value="2019">2019/2020</option>
                                <option value="2020">2020/2021</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>SEMESTER</td>
                        <td><select name="semester" class="form-control">
                                <option value="1">GANJIL</option>
                                <option value="2">GENAP</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>PRODI</td>
                        <td><select name="kodeprodi" class="form-control">
                                <option value="57201">S1 SISTEM INFORMASI</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="CARI"></td>
                    </tr>

                    </tbody>
                </form>
            </table>
    	</div>
    </div>


</div>

@endsection