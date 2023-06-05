<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input Data</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('SB Admin/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{asset('SB Admin/css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('SB Admin/font-awesome/css/font-awesome.min.css')}}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="{{url('/')}}"><i class="fa fa-user"></i> Pegawai</a></li>
            <li><a href="cstmr"><i class="fa fa-user"></i> Costumer</a></li>
            <li class="active"><a href="transaksi"><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
            <li><a href="suplier"><i class="fa fa-truck"></i> Suplier</a></li>
            <li><a href="point"><i class="fa fa-star"></i> Point</a></li>
            <li><a href="keritiksaran"><i class="fa fa-bookmark"></i> Keritik & Saran</a></li>
            <li><a href="laporan"><i class="fa fa-book"></i> Laporan</a></li>
            <li><a href="profil"><i class="fa fa-user"></i> Profil</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> LogOut</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

      <div class="row">
          <div class="col-lg-12">
            <h1>Input Data Transaksi Konsumen</h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
              <li><i class="fa fa-shopping-cart"></i> Transaksi Konsumen</li>
              <li class="active"><i class="fa fa-shopping-cart"></i> Input Data Transaksi Konsumen</li>
            </ol>
            <form action="/instTkonsumen" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Id Transaksi</label>
                <input type="string" name="id_transaksi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label>
                <input type="string" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Id Konsumen</label>
                  <div class="form-group">
                    <select class="form-control" name="id_konsumen">
                    <option selected disabled>-- Pilih ID --</option>
                    @foreach ($konsumen as $row)
                    <option value="{{ $row->id }}">{{ $row->id_konsumen }}-{{ $row->nama }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Id Barang</label>
                  <div class="form-group">
                    <select class="form-control" name="id_barang">
                    <option selected disabled>-- Pilih ID --</option>
                    @foreach ($barang as $row)
                    <option value="{{ $row->id }}">{{ $row->id_barang }}-{{ $row->nama }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Jenis Pembayaran</label>
                <div class="form-group">
                    <select class="form-control" name="jenis">
                        <option selected disabled>-- Pilih Jenis Pembayaran --</option>
                        <option>Cash</option>
                        <option>Transfer</option>
                        <option>Kredit</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Id Pegawai</label>
                  <div class="form-group">
                    <select class="form-control" name="id_pegawai">
                    <option selected disabled>-- Pilih ID --</option>
                    @foreach ($pegawai as $row)
                    <option value="{{ $row->id }}">{{ $row->id_pegawai }}-{{ $row->nama }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Input Data</button>
            </p>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>