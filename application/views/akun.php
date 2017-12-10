<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Yummyeatery Login and Register</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylecin.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" action="<?php echo base_url('login_user/validasi'); ?>" method="post">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Nama Lengkap" name="fullname">
      <input type="password" placeholder="Password" name="password">
      <input type="password" placeholder="Retype Password" name="retype">
      <input type="text" placeholder="Email" name="email">
      <input type="text" placeholder="Alamat" name="alamat">
      <input type="text" placeholder="Nomor HP" name="no_hp">
      <button>create</button>
      <p class="message">Sudah miliki akun? <a href="#">Masuk</a></p>
    </form>
    <form class="login-form" action="<?php echo base_url('login_user/login'); ?>" method="post">
      <input type="text" placeholder="username" name="username">
      <input type="password" placeholder="password" name="password">
      <button>login</button>
      <p class="message">Belum miliki akun? <a href="#">Buat Akun</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url(); ?>assets/js/indexcin.js"></script>

</body>
</html>
