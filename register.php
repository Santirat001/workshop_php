<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>คุณคือผู้เข้าร่วม</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">
  <style>
        body {
            font-family: 'Chonburi', cursive;
        }
    </style>


</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>คุณคือใคร ?</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ใส่ข้อมูลให้ครบถ้วน</p>

      <form action="insert.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="txt_fullname" class="form-control" placeholder="ชื่อ - นามสกุล">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card text-success"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="txt_username" class="form-control" placeholder="ชื่อผู้ใช้">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user text-success"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"name="txt_password" class="form-control" placeholder="รหัสผ่าน">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-success"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txt_repassword"class="form-control" placeholder="ยืนยันรหัสผ่าน">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-success"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-success ">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               ยอมรับ <a href="#" class="text-success">เงื่อนไข</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">ยืนยัน</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="login.php" class="btn btn-block btn-secondary">
          <i class="fab fa-facebook mr-2"></i>
          เข้าสู่ระบบด้วย Facebook
        </a>
        <a href="login.php" class="btn btn-block btn-success">
          <i class="fab fa-google-plus mr-2"></i>
          เข้าสู่ระบบด้วย Google+
        </a>
      </div>

      <a href="login.php" class="text-center text-success">เป็นสมาชิกแล้ว</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
