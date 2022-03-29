<?php
session_start();
if(isset($_POST['pengguna_baru'])) {
    error_reporting(0);
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $filecatatan="file/".$nik."-".$nama.".txt";

    $data = file("config.txt");
    foreach($data as $value){
        $pecah = explode("|",$value);
        if($nik==$pecah['0']){
            $cek = true;
        }
    }

    if($cek){
      $alert = '<div class="alert alert-danger">Maaf NIK yang anda masukkan telah digunakan!</div>';
    }else{
      $format = "\n$nik|$nama";
      $file = fopen('config.txt','a');
      fwrite($file, $format);
      fclose($file);
      $fh=fopen($filecatatan, "w");
        fwrite($fh, "");
        fclose($fh);
      $alert = '<div class="alert alert-success">Anda berhasil mendaftar! Silahkan login.</div>';
    }
} elseif(isset($_POST['masuk'])) {
    $nik  = $_POST['nik'];
    $nama = $_POST['nama'];

    $format = "$nik|$nama";
    $file = file('config.txt',FILE_IGNORE_NEW_LINES);
    if(in_array($format, $file)){ //jika data ditemukan
        session_start();
        $_SESSION['nik'] = $nik;
        $_SESSION['nama'] = $nama;

        header("Location:index.php");
        
    }else{ 
        $alert = '<div class="alert alert-danger">Maaf kombinasi NIK dan nama tidak cocok!</div>';
    }}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>
<body>         
<div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" style="width: 200px; height: 65px;"></a>
            </div>
            <h1 class="auth-title">Selamat Datang!</h1>
            <?= @$alert; ?>  
            <p class="auth-subtitle mb-5">Masukkan data kamu untuk masuk ke aplikasi.</p>

            <form action="" method="POST">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" name="nik" placeholder="Masukkan NIK" required>
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" name="nama" placeholder="Masukkan Nama Lengkap" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="pengguna_baru">Pengguna Baru</button>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1" name="masuk">Masuk</button>
            </form>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

</div>


<script src="jquery/jquery.js"></script>
<script src="bs/js/bootstrap.js"></script>
</body>
</html>