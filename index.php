<?php 
session_start();

$nik = @$_SESSION['nik'];
$nama = @$_SESSION['nama'];

$page = @$_GET['page'];

if(!empty($_SESSION['nik'])){
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <style>
      table.dataTable td{
          padding: 15px 8px;
      }
      .fontawesome-icons .the-icon svg {
          font-size: 24px;
      }
    </style>
</head>
<body>
<?php include"navigasi.php";?>
            <?php if($page == 'isi_data') {
                include "isi_data.php";
            } elseif($page == 'home' || empty($page)) {
                include "home.php";
            } elseif($page == 'catatan_perjalanan') {
                include "catatan_perjalanan.php";
            } elseif($page == 'logout') {
                unset($_SESSION['nik']);
                unset($_SESSION['nama']);
                header("location:login.php");
            } ?>

<!-- General JS Scripts -->
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="assets/js/pages/dashboard.js"></script>
  <script src="assets/js/mazer.js"></script>
  <script src="assets/vendors/jquery/jquery.min.js"></script>
  <script src="assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
  <script src="assets/vendors/fontawesome/all.min.js"></script>
  <script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
  </script>
</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>