  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(count(get_included_files()) ==1) exit("Direct access not permitted.");
  ?><!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Informasi Perpustakaan</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url()."assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()."assets/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()."assets/"; ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    
    
  </head>

  <body id="page-top">
    <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Sistem Informasi Perpustakaan</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2" action="<?php echo base_url('index.php/welcome/hasil')?>" action="GET">
            <div class="input-group">
              <input class="form-control" type="text" id="cari" name="cari" placeholder="Cari Buku">
              <span class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/logout'); ?>"">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
    <div>
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url()."assets/"; ?>#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
        <div class="card-header">
          <a class="nav-link" href="<?php echo base_url('welcome/tambah'); ?>" style="color: Black"><img style="width: 20px" src="<?php echo base_url()."assets/img/add.png";?>"> Tambah Buku</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th>Rak</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
              </thead>
              <?php foreach ($data_buku as $row) {?>
          <tr>
            <td><?php echo $row->judul;?></td>
            <td><?php echo $row->pengarang;?></td>
            <td><?php echo $row->penerbit;?></td>
            <td><?php echo $row->kategori;?></td>
            <td><?php echo $row->rak;?></td>
            <td>
            <?php echo anchor('welcome/edit/'.$row->id_buku,'Edit'); ?></td>
            <td><?php echo anchor('welcome/hapus/'.$row->id_buku,'Hapus'); ?>   
        </td>
          <?php } ?>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
      <!-- Scroll to Top Button-->
      
      <!-- Logout Modal-->
      
    </div>
  </body>

  </html>
