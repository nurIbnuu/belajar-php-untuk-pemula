<?php 
require 'functions.php';

if(isset($_POST['register'])) {
  // var_dump($_POST); die;
  if(registrasi($_POST) > 0) {
    echo "<script>
            alert('User baru berhasil ditambahkan!')
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

  <title>Halaman Registrasi</title>
</head>
<body>
  <!-- Header -->
  <nav class="navbar bg-body-tertiary mb-2">
    <div class="container">
      <a class="navbar-brand fs-1" href="#"> Halaman Registrasi </a>
    </div>
  </nav>


  <form action="" method="post">
        <div class="container mt-4">
          <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" required/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password2" name="password2"/>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col text-end">
              <button type="submit" name="register" class="btn btn-secondary">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Register
              </button>
            </div>
          </div>
      </div>
    </form>
</body>
</html>