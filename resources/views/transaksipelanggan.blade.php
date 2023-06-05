<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Optik Boss | Data Transaksi Pelanggan</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('SB Admin/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{asset('SB Admin/css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('SB Admin/font-awesome/css/font-awesome.min.css')}}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

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
          <a class="navbar-brand" href="index.html">Optik Boss Admin</a>
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
            <h1>Transaksi Pelanggan</h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
              <li class="active"><i class="fa fa-shopping-cart"></i> Transaksi Pelanggan</li>
            </ol>
            <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-body">
              <a href="Form-Transaksi-Pelanggan"><button type="button" class="btn btn-success">Tambah Data</button></a> <br> <br>
              <div class="table-responsive text-center">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Id Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Id Pelanggan</th>
                        <th>Id Barang</th>
                        <th>Jenis Transaksi</th>
                        <th>Id Pegawai</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>TP001</td>
                        <td>23/09/2022</td>
                        <td>PL001</td>
                        <td>B0001</td>
                        <td>Transfer</td>
                        <td>P0001</td>
                        <td>
                          <button type="button" class="btn btn-info">Edit</button>
                          <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                      </tr>
                      <tr>
                      <td>TP002</td>
                        <td>24/09/2022</td>
                        <td>PL002</td>
                        <td>B0002</td>
                        <td>Transfer</td>
                        <td>P0002</td>
                        <td>
                          <button type="button" class="btn btn-info">Edit</button>
                          <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td>TP003</td>
                          <td>24/09/2022</td>
                          <td>PL003</td>
                          <td>B0003</td>
                          <td>Transfer</td>
                          <td>P0003</td>
                          <td>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                      </tr>
                      <tr>
                      <td>TP004</td>
                          <td>26/09/2022</td>
                          <td>PL004</td>
                          <td>B0004</td>
                          <td>Transfer</td>
                          <td>P0004</td>
                          <td>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>         
          </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="SB Admin/js/jquery-1.10.2.js"></script>
    <script src="SB Admin/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
