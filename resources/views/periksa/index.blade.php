@extends('layouts.app')

@section('content')               
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Daftar Pemeriksaan Hari Ini</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">pemeriksaan</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Daftar Pemeriksaan</li>
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
                            <div class="panel-heading">{{ date("l, d F Y", strtotime($tgl)) }}</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Nama Dokter</th>
                                        <th>Nama Pasien</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $p)
                                        <tr>
                                        <td>{{ $p -> dokter -> nama_dokter}}</td>
                                        <td>{{ $p -> pasien -> nama_pasien}}</td>
                                        <?php  
                                        	if ($p->status == "UNCHECKED") {
                                        		$status = "label label-warning";
                                        	}else{
                                        		$status = "label label-success";
                                        	}

                                        	//$status = "label label-success";

                                        ?>
                                        <td align="center"><span class="<?php echo $status; ?>">{{ $p -> status }}</span></td>
                                        <td>
                                            <form method="get" action="{{ route('pasien.show',$p->id) }}">

                                                <button type="submit" class="btn btn-info btn-block"><span class="fa fa-stethoscope"></span></button>
                                                <input type="hidden" name="idpasien" value="{{ $p->pasien_id }}">
                                            </form>
                                            <form method="post" action="{{ route('periksa.update',['id'=>$p->id]) }}" style="margin-top: 10px">
                                                
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT')}}
                                                    <button class="btn btn-danger btn-block" type="button" onclick="if (confirm('Anda yakin pasien ini sudah diperiksa ?')) this.form.submit();"><span class="fa fa-check-square-o" title="CHECKED"></span></button> 
                                                
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
@endsection
