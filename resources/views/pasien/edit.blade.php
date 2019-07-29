@extends('layouts.app')

@section('content') 
<html>
<head>
	<title></title>
</head>
<body>
	<div id="page-wrapper">
		<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Form Edit Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">edit pasien</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">edit pasien</li>
                    </ol>
                    <div class="clearfix">
                    </div>
         </div>
	<div class="page-content">
	<div id="tab-general">
    <div class="row mbl">   
    <div class="panel panel-grey">
    <div class="panel-heading">Edit Data Pasien</div>
    <div class="panel-body">
	<div class="form-group">
	<div class="row" style="color: black">
		<div class="col-md-5" style="margin-left: 40px">
			<form method="post" action="{{route('pasien.update',['id'=>$data->id])}}">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nomor Pasien</label>
			    <input type="text" name="nopasien" value="{{ $data->no_pasien }}"  class="form-control" readonly>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nomor Pasien</label>
			    <input type="text" name="namapasien" value="{{ $data->nama_pasien }}" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nomor Pasien</label>
			    <input type="date" name="tgllahir" value="{{ $data->tgl_lahir }}" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Usia</label>
			    <input type="text" name="usia" value="{{ $data->usia }}" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Alamat Pasien</label>
			    <input type="text" name="alamatpasien" value="{{ $data->alamat_pasien }}" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nomor HP Pasien</label>
			    <input type="text" name="nohp" value="{{ $data->no_hppasien }}" class="form-control">
			  </div>
			  <button type="submit" class="btn btn-primary">SIMPAN</button>
			  <button type="reset" class="btn btn-danger">HAPUS</button>
			</form>
		</div>
		<div class="col-md-7"></div>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
@endsection