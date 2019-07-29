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
                            Form Tambah Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">daftar dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tambah Pasien</li>
                    </ol>
                    <div class="clearfix">
                    </div>
         </div>
	<div class="page-content">
	<div id="tab-general">
    <div class="row mbl">   
    <div class="panel panel-grey">
    <div class="panel-heading">Tambah Pasien</div>
    <div class="panel-body">
	<div class="form-group">
	<div class="row" style="color: black">
		<div class="col-md-5" style="margin-left: 40px">
			<form method="post" action="{{route('pasien.store')}}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="exampleInputEmail1">No Pasien</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Pasien" name="nopasien">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Pasien</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pasien" name="namapasien">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tgl lahir</label>
			    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukkan tgl lahir" name="tgllahir">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Alamat Pasien</label>
			    <textarea name="alamat" class="form-control"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">No HP</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No Hp" name="nohp">
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