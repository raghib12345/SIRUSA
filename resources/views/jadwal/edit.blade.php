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
                            Form Tambah Jadwal Periksa</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">jadwal periksa</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Jadwal periksa</li>
                    </ol>
                    <div class="clearfix">
                    </div>
         </div>
	<div class="page-content">
	<div id="tab-general">
    <div class="row mbl">   
    <div class="panel panel-grey">
    <div class="panel-heading">Tambah Data Jadwal</div>
    <div class="panel-body">
	<div class="form-group">
	<div class="row" style="color: black">
		<div class="col-md-5" style="margin-left: 40px">
			<form method="post" action="{{route('jadwal.update',['id'=>$jadwal->id])}}">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Poli</label>
			    <select name="poli" class="form-control">
			    	@foreach($poli as $p)
			    		<option value="{{ $p->id }}">{{ $p->jenis_poli }}</option>
			    	@endforeach
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nama Dokter</label>
			    <select name="dokter" class="form-control">
			    	@foreach($dokter as $p)
			    		<option value="{{ $p->id }}">{{ $p->nama_dokter }}</option>
			    	@endforeach
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Hari</label>
			    <select name="hari" class="form-control">
			    	<option value="senin-jum'at">senin-jum'at</option>
			    	<option value="sabtu dan minggu">sabtu dan minggu</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Jam Buka</label>
			    <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no hp" name="jam_buka" value="{{ $jadwal -> jam_buka }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Jam Tutup</label>
			    <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no hp" name="jam_tutup" value="{{ $jadwal -> jam_tutup }}">
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