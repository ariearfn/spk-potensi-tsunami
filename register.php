<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
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
  <div class="row content">
    <div class="col-md-5 mb-3">
      <img src="register.svg" class="img-fluid" alt="image">
    </div>
    <div class="col-md-6">
      <h3 class="signin-text mb-3">Register</h3><br>
      <form action="cek_register.php" method="post">
        <div class="form-group">
          <input type="text" placeholder="Nama" name="nama" class="form-control form-control-border" required="required">
        </div><br>  
        <div class="form-group">
          <input type="email" placeholder="Email" name="email" class="form-control" required="required">
        </div><br>
        <div class="form-group">
          <input type="text" placeholder="Username" name="username" class="form-control" required="required">
        </div><br>
        <div class="form-group">
          <input type="password" placeholder="Masukan Password" name="password" class="form-control" required="required">
        </div><br> 
        <button type="submit" class="btn btn-class" value="REGISTER">REGISTER</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>