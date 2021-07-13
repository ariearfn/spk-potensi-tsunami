<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
h1 {
  text-align: center;
  color: white;
}
</style>
</head>
<body>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo"<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

<div class="container">
  <h1>SPK Penentuan Gempa Bumi Potensi Tsunami</h1>
  <div class="row content">
    <div class="col-md-6 mb-3">
      <img src="img.svg" class="img-fluid" alt="image">
    </div>
    <div class="col-md-6">
      <h3 class="signin-text mb-3">Sign In</h3>
      <form action="cek_login.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control form-control-border" required="required">
          <!-- <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border"> -->
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required="required">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
          <label class="form-check-label" for="checkbox">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-class" value="LOGIN">Login</button>
        <a type="button" href="register.php" class="btn btn-primary" value="REGISTER">Register</a>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>