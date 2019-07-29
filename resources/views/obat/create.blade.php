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
			<form method="post" action="{{route('obat.store')}}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Obat</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Obat" name="namaobat">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Jenis Obat</label>
			    <select name="jenisobat" class="form-control">
			    	<option value=""></option>
			    	<option value="Kapsul">Kapsul</option>
			    	<option value="Tablet">Tablet</option>
			    	<option value="Puyer">Puyer</option>
			    	<option value="Sirup">Sirup</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Harga Beli</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan harga beli" name="hargabeli">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Harga Jual</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan harga jual" name="hargajual">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Stok</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan stok" name="stok">
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