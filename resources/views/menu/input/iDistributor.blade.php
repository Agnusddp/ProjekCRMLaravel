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
            <li><a href="transaksi"><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
            <li class="active"><a href="suplier"><i class="fa fa-truck"></i> Suplier</a></li>
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
            <h1>Input Data Distrubutor</h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-truck"></i> Suplier</a></li>
              <li><i class="fa fa-truck"></i> Data Distributor</li>
              <li class="active"><i class="fa fa-truck"></i> Input Data Distributor</li>
            </ol>
            <form action="/instDistributor" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">ID Distributor</label>
                <input type="string" name="id_distributor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="string" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                <input type="string" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="string" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="string" name="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>

              <p>
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