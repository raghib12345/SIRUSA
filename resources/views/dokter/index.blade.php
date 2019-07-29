@extends('layouts.app')

@section('content')                 
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Daftar Dokter</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">daftar dokter</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Daftar Dokter</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">   
                        <div class="panel panel-grey">
                            <div class="panel-heading">Dokter - dokter Yang Tersedia di Rumah Sakit</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered" id="dataTables-example">
                                    <a href="{{ route('dokter.create') }}"><button name="tambah" class="btn btn-warning" style="margin-bottom: 10px"><i class="fa fa-plus"> Tambah dokter</i></button></a>

                                    <thead>
                                    <tr>
                                        <th>NIDN</th>
                                        <th>Nama Dokter</th>
                                        <th>Alamat</th>
                                        <th>No Handphone</th>
                                        <th>Poli</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $p)
                                        <tr>
                                        <td>{{ $p -> nidn }}</td>
                                        <td>{{ $p -> nama_dokter}}</td>
                                        <td>{{ $p -> alamat_dokter }}</td>
                                        <td>{{ $p -> no_hpdokter }}</td>
                                        <td>{{ $p -> poli -> jenis_poli }}</td>
                                        <td>
                                            <form method="post" action="{{ route('dokter.destroy',$p->id) }}">
                                                    <a href="{{ route('dokter.edit',$p->id) }}" class="btn btn-success"><span class="fa fa-pencil" title="EDIT"></span></a>
                                                    {{ csrf_field() }}
                                                    
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o" title="DELETE"></span></button> 
                                            </form>

                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                             
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
            

</html>
@endsection
