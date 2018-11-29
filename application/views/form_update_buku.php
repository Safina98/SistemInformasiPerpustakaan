<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets/"; ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Ubah Data</div>
      <div class="card-body">
      	<?php foreach ($data_buku as $row) {?>
        <form action=" <?php echo base_url().'/welcome/update'?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Update Data</label>
            <input class="form-control" id="exampleInputEmail1" type="hidden" aria-describedby="emailHelp" name="id_buku" value="<?php echo $row->id_buku ?>>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Judul</label>
            <input class="form-control" id="exampleInputPassword1" type="text" name="judul" value="<?php echo $row->judul ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pengarang</label>
            <input class="form-control" id="exampleInputPassword1" type="text" name="pengarang" value="<?php echo $row->pengarang ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Penerbit</label>
            <input class="form-control" id="exampleInputPassword1" type="text" name="penerbit" value="<?php echo $row->penerbit ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kategori</label>
            <input class="form-control" id="exampleInputPassword1" type="text" name="kategori" value="<?php echo $row->kategori ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Rak</label>
            <input class="form-control" id="exampleInputPassword1" type="text" name="rak" value="<?php echo $row->rak ?>">
          </div>
          
          <input class="btn btn-primary btn-block" type="submit" value="Simpan">
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
