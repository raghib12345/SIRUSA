@extends('layouts.app')

@section('content')                 
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Rekam Medis Pasien</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">rekam medis</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Rekam Medis</li>
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
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="col-md-9">
                    <div id="tab-general" style="color: black;font-size: 15px" >
                    
                    
                    <table style="margin-bottom: 30px">
                        <tr>
                            <td>No Pasien&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td>{{ $data->no_pasien }}</td>
                        </tr>
                        <tr>
                            <td>Nama Pasien&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td>{{ $data->nama_pasien }}</td>
                        </tr>
                        <tr>
                            <td>Tgl. Lahir / Umur&nbsp;</td>
                            <td>:&nbsp;</td>
                        <td>{{ date("d F Y", strtotime($data->tgl_lahir)) }} / {{ date("Y") - date("Y", strtotime($data->tgl_lahir)) }} Tahun</td>
                        </tr>
                        <tr>
                            <td>Alamat&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td>{{ $data->alamat_pasien }}</td>
                        </tr>
                        <tr>
                            <td>No Handphone&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td>{{ $data->no_hppasien }}</td>
                        </tr>
                    </table>
                    <table class="table table-hover table-bordered" id="dataTables-example">
                        <thead>
                            <th>Tanggal Periksa</th>
                            <th>Keluhan</th>
                            <th>Diagnosa</th>
                            <th>Tindakan</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($data->rekam as $rek)
                            <tr>
                                <td>{{ date("d F Y", strtotime($rek->periksa->tanggal)) }}</td>
                                
                                <td>{{ $rek->keluhan }} </td>
                                <td>{{ $rek->diagnosa }}</td>
                                <td>{{ $rek->tindakan }}</td>
                                <td>
                                    <a href="#" class="btn btn-success"><span class="fa fa-pencil" title="EDIT"></span></a>
                                    <a href="#" class="btn btn-danger"><span class="fa fa-trash-o" title="HAPUS"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    @foreach($idperiksa as $id)
                    
                    <div align="right">
                        <form method="get" action="{{ route('obat.show',$id->id) }}">
                            <input type="hidden" name="idpasien" value="{{ $id->pasien_id }}">
                            <input type="hidden" name="idperiksa" value="{{ $id->id }}">
                            <button type="submit" class="btn btn-success">Pilih Obat</button>
                        </form>
                    </div>
                    @endforeach     
                    
                </div>
                <form method="post" action="{{ route('rekammedis.store') }}">
                        {{ csrf_field() }}
                <input type="hidden" name="idpasien" value="{{ $data->id }}">
                <input type="hidden" name="idperiksa" value="{{ $id->id }}">
                <div class="col-md-3">
                    <h4 style="margin-left: 20px"><strong>Keluhan</strong></h4>
                    <div class="box box-info" style="margin-left: 20px; ">

                        <div class="box-header" style="margin-right: 10px; margin-left: -10px">
                          
                                <textarea class="form-control" name="keluhan" cols="30" required></textarea>
                          
                        </div>
                      </div>
                      <h4 style="margin-left: 20px"><strong>Diagnosa</strong></h4>
                    <div class="box box-info" style="margin-left: 20px; ">

                        <div class="box-header" style="margin-right: 10px; margin-left: -10px">
                          
                                <input type="text" name="diagnosa" class="form-control" required>
                          
                        </div>
                      </div>
                      <h4 style="margin-left: 20px"><strong>Tindakan</strong></h4>
                    <div class="box box-info" style="margin-left: 20px; ">

                        <div class="box-header" style="margin-right: 10px; margin-left: -10px">
                          
                                <textarea type="text" name="tindakan" class="form-control" required></textarea>
                          
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success btn-block" style="margin-left: 20px">Simpan</button>
                    </form>
                </div>
                </div>
                
                </div>
                </div>
                </div>
                </div>
                </div>

@endsection
