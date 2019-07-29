@extends('layouts.app')

@section('content')                 
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Daftar Poli</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">daftar poli</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Daftar Poli</li>
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
                            <div class="panel-heading">Poli - Poli Yang Tersedia di Rumah Sakit</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered" id="dataTables-example">
                                    <a href="{{ route('poli.create') }}"><button name="tambah" class="btn btn-warning" style="margin-bottom: 10px"><i class="fa fa-plus"> Tambah poli</i></button></a>

                                    <thead>
                                    <tr>
                                        <th>ID Poli</th>
                                        <th>Nama Poli</th>
                                        <th>Daftar Dokter</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $p)      
                                        <tr>             
                                            <td>{{ $p->no_poli }}</td>       
                                            <td>{{ $p->jenis_poli }}</td>       
                                            <td>
                                                @foreach($p->dokter as $dok)
                                                    {{ $dok -> nama_dokter }} <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                
                                                <form method="post" action="{{ route('poli.destroy',$p->id) }}">
                                                    <a href="{{ route('poli.edit',$p->id) }}" class="btn btn-success"><span class="fa fa-pencil" title="EDIT"></span></a>
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
