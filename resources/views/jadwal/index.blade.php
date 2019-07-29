@extends('layouts.app')

@section('content')                 
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Jadwal Pemeriksaan</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">jadwal periksa</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">jadwal periksa</li>
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
                            <div class="panel-heading">Jadwal Konsultasi Pemeriksaan</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered" id="dataTables-example">
                                    <a href="{{ route('jadwal.create') }}"><button name="tambah" class="btn btn-warning" style="margin-bottom: 10px"><i class="fa fa-plus"> Tambah jadwal</i></button></a>

                                    <thead>
                                    <tr>
                                        <th>Poli</th>
                                        <th>Nama Dokter</th>
                                        <th>Hari Buka</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $p)
                                        <tr>
                                        <td>{{ $p -> poli -> jenis_poli}}</td>
                                        <td>{{ $p -> dokter -> nama_dokter }}</td>
                                        <td>{{ $p -> hari_buka}}</td>
                                        <td>{{ $p -> jam_buka }}</td>
                                        <td>{{ $p -> jam_tutup }}</td>
                                        <td>
                                            <form method="post" action="{{ route('jadwal.destroy',$p->id) }}">
                                                    <a href="{{ route('jadwal.edit',$p->id) }}" class="btn btn-success"><span class="fa fa-pencil" title="EDIT"></span></a>
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
