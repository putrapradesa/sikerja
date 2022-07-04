
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIKERJA - Sistem Informasi Bon Kerja</title>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/public/assets/dist/img/logogrobogan.png" /> 
  <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->


  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/stylelogin.css">

  <script
      src="<?php echo base_url(); ?>/public/assets/js/login.js"
      crossorigin="anonymous"
  ></script>

</head>

<body>
<?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
        ?>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="POST" action="<?php echo base_url(); ?>/auth/valid_login" accept-charset="UTF-8" id="tampil" class="sign-in-form"><input name="_token" type="hidden" value="XXNAcs6YJ48BjIzaQViQSAX15TLsHOxvSN51Q2iH">
          <img src="<?php echo base_url(); ?>/public/assets/dist/img/logo-rsud-9.png" alt="Logo RSUD Soedjati" height="107">
          <br>
          <h2 class="title">Silakan Login</h2>
          <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name='username' class="form-control" required placeholder="Username">
          </div>
          <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name='password' class="form-control" required placeholder="Password">
          </div>
          
          <button type="submit" class="btn btn-primary">Login</button>
            
        </form>
    		<center>
          <p class="social-text">&copy; SIKERJA<br><b>RSUD DR R. SOEDJATI SOEMODIARDJO</b></a></p>
    		</center>
        
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content text-center">
          <h3>SIKERJA - Sistem Informasi Bon Tugas Kerja</h3>
          <br><br><br><br><br>
          <img src="<?php echo base_url(); ?>/public/assets/dist/img/draw2.png" class="image" style="align-items: center;">
        </div>
           
      </div>
    </div>
  </div>

  
</body>
</html>
