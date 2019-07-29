@extends('layouts.app')

@section('content')
            <div id="page-wrapper">
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ route('beranda.index') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-medkit"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span>{{ $j_poli }}</h4>
                                        <p class="description">
                                            Jumlah Poli</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 20%;" class="progress-bar progress-bar-success">
                                                <span class="sr-only">80% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-user-md"></i>
                                        </p>
                                        <h4 class="value">
                                            {{ $j_dokter }}</h4>
                                        <p class="description">
                                            Jumlah Dokter</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 40%;" class="progress-bar progress-bar-info">
                                                <span class="sr-only">60% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-user"></i>
                                        </p>
                                        <h4 class="value">
                                            {{ $j_pasien }}</h4>
                                        <p class="description">
                                            Jumlah Pasien</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%;" class="progress-bar progress-bar-danger">
                                                <span class="sr-only">50% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-plus-square"></i>
                                        </p>
                                        <h4 class="value">
                                            {{ $j_obat }}</h4>
                                        <p class="description">
                                            Jumlah Jenis Obat</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%;" class="progress-bar progress-bar-warning">
                                                <span class="sr-only">70% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                            <div class="page-header pull-left">
                                <div class="page-title">
                                    <span style="font-size: 25px;">JADWAL KEGIATAN RS</span></div>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                            <div class="col-lg-12" style="margin-top: 30px">
                                <div class="timeline-centered timeline-sm">
                                    <article class="timeline-entry">
                                    <div class="timeline-entry-inner">
                                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>12:45 AM</span><span>Today</span></time>
                                        <div class="timeline-icon bg-violet"><i class="fa fa-heart"></i></div>
                                        <div class="timeline-label bg-violet"><h4 class="timeline-title">Operasi Tranplantasi Jantung</h4>

                                            <p>Operasi atas nama Budi Gunawan oleh dr. Donny Kurniawan pada ruang operasi RO004</p></div>
                                    </div>
                                    </article>
                                    <article class="timeline-entry left-aligned">
                                    <div class="timeline-entry-inner">
                                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>9:15 PM</span><span>Today</span></time>
                                        <div class="timeline-icon bg-green"><i class="fa fa-star-half-o"></i></div>
                                        <div class="timeline-label bg-green"><h4 class="timeline-title">Operasi Amandel</h4>

                                            <p>Operasi atas nama Ibu Mega Mediawati oleh dr. Bhintang Dirgantara pada ruang operasi RO001</p></div>
                                    </div>
                                    </article>
                                    <article class="timeline-entry">
                                    <div class="timeline-entry-inner">
                                        <time datetime="2014-01-09T13:22" class="timeline-time"><span>8:00 AM</span><span>27/07/2019</span></time>
                                        <div class="timeline-icon bg-orange"><i class="fa fa-exclamation"></i></div>
                                        <div class="timeline-label bg-orange"><h4 class="timeline-title">Rapat Dokter</h4>

                                            <p><img src="http://lorempixel.com/45/45/nature/3/" alt="" class="timeline-img pull-left">Untuk semua dokter agar dapat hadir pada rapat mengenai pembelian alat baru yang dibutuhkan pada ruang rapat</p></div>
                                    </div>
                                    <div class="timeline-entry-inner">
                                        <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><i class="fa fa-plus"></i></div>
                                    </div>
                                </article>
                                </div>
                            </div>
                            <!--<div class="col-lg-4">
                            <div id="my-calendar"></div>
                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
@endsection