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
                            Form Tambah Dokter</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">daftar dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tambah Dokter</li>
                    </ol>
                    <div class="clearfix">
                    </div>
         </div>
	<div class="page-content">
	<div id="tab-general">
    <div class="row mbl">   
    <div class="panel panel-grey">
    <div class="panel-heading">Tambah Dokter</div>
    <div class="panel-body">
	<div class="form-group">
	<div class="row" style="color: black">
		<div class="col-md-5" style="margin-left: 40px">
			<form method="post" action="{{route('dokter.store')}}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="exampleInputEmail1">NIDN</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIDN" name="nidn">
			    <small id="emailHelp" class="form-text text-muted">Tulis NIDN</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nama Dokter</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama" name="dokter">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Alamat</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan alamat" name="alamat">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">No HP</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no hp" name="no_hp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Poli</label>
			    <select name="jenispoli" class="form-control">
			    	@foreach($data as $poli)
			    	<option value="{{ $poli -> id }}">{{ $poli -> jenis_poli }}</option>
			    	@endforeach
			    </select>
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