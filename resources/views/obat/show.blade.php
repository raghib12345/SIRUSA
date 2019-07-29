<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}">
  <!-- Font Awesome -->
  <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>
<div class="wrapper">

  

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-top: 30px">
      <h1 style="margin-left: 10px">
        <i class="fa fa-globe"> Pengobatan Detail</i>
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pengobatan</a></li>
        <li><a href="#"> Detail Pengobatan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- info row -->
      <h6>Nama Pasien : {{ $data->pasien->nama_pasien }}</h6>
      <h6>Dokter Periksa : {{ $data->dokter->nama_dokter }}</h6>
      <h6>Tanggal Periksa : {{date("d/m/Y", strtotime($data->tanggal))}}</h6>
      <!-- /.row -->
      <div align="right" style="margin-bottom: 10px"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Detail</button></div>
    <!-- Modal -->
        
        <form method="post" action="{{ route('pengobatan.store') }}">
            {{ csrf_field () }}
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Detail Penjualan</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                
                    <label>Nama Obat</label>
                    <select name="pilihan" class="form-control">
                        <option>Pilih obat</option>
                        @foreach($obat as $ob)
                        <option value="{{ $ob->id }}">{{ $ob->nama_obat }}</option>
                        @endforeach
                    </select>
                    <label style="margin-top: 10px">Jumlah beli</label>
                    <input type="number" name="jumlah" class="form-control">
                    <input type="hidden" name="idperiksa" value="{{ $data->id }}">
                    <input type="hidden" name="idpasien" value="{{ $data->pasien_id }}">
                </div>
                
                
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal" style="color: white">Tutup</button>
                </div>
            </div>
        </div>
        </div>
        </form>
        
   
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
              <th>Nama Obat</th>
              <th>Jumlah</th>
              <th>Harga/lembar</th>
              <th>Sub Total</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                @foreach($detail as $p)
                  <tr>
                    <td>{{ $p->obat->nama_obat }}</td>
                    <td>{{ $p->jumlah }}</td>
                    <td>Rp. {{ number_format($p->obat->harga_jual) }}</td>
                    <td>Rp. {{ number_format($p->jumlah * $p->obat->harga_jual) }}</td>
                    <td>
                      <form method="post" action="{{ route('pengobatan.destroy',$p->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="idperiksa" value="{{ $p->periksa_id }}">
                        <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o" title="DELETE"></span></button> 
                      </form>
                    </td>
                  </tr>
                  <?php $total += ($p->jumlah * $p->obat->harga_jual); ?>
                @endforeach
            </tbody>
          </table>
          
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-5">
          <h3>Total Harga : Rp. <?= number_format($total); ?></h3>
          <a href="{{ route('periksa.index') }}" class="btn btn-success">SELESAI</a>
        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-lg-6">
          <p class="lead">Payment Methods:</p>
          <img src="{{ asset('assets/images/payment/visa.png') }}" alt="Visa">
          <img src="{{ asset('assets/images/payment/mastercard.png') }}" alt="Mastercard">
          <img src="{{ asset('assets/images/payment/american-express.png') }}" alt="American Express">
          <img src="{{ asset('assets/images/payment/paypal2.png') }}" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-lg-6">
            <strong><h3></h3></strong>
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>
           
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<footer style="position: absolute; bottom: 0px; background-color: black; color: white; height: 50px; line-height: 50px; width: 100%; text-indent: 20px">
    <strong>Copyright &copy; 2019 </strong> Kios Kita
</footer>


<script src="{{ asset('assets/script/jquery.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/script/bootstrap.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
</body>
</html>
