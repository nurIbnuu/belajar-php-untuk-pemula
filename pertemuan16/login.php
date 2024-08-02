<?php
session_start();

if(isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  // cek username
  if(mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row['password'])) {
      // set session
      $_SESSION['login'] = true;

      header('Location: index.php');
      exit;
    }
  }

  $error = true;
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

  <title>Halaman Login</title>
</head>
<body>
  <!-- Header -->
  <nav class="navbar bg-body-tertiary mb-2">
    <div class="container">
      <a class="navbar-brand fs-1" href="#"> Halaman Login </a>
    </div>
  </nav>

  <form action="" method="post">
        <div class="container mt-4">
          <?php if(isset($error)) : ?>
            <div class="alert alert-danger" role="alert">
            Username atau Password salah.
            </div>
          <?php endif; ?>

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

          <div class="row mt-3">
            <div class="col">
              <a href="registrasi.php">
                <p class="text-decoration-underline">Buat Akun Baru</p>
              </a>
            </div>
            <div class="col text-end">
              <button type="submit" name="login" class="btn btn-secondary">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Login
              </button>
            </div>
          </div>
      </div>
    </form>
</body>
</html>