<?php
require_once('components.php');
include('server.php');
session_start();
if (!isset($_SESSION['username'])){
  header('location:login.php');
  
}
if (isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  
  
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css"
    integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
navhead();
?>
<section class="home-wrapper-1 py-5">
<div class="container-xxl">
    <div class="row">
        <div class="col-5 bg-white rounded p-5">
<h3 class="mb-4">ข้อมูลผู้ใช้</h3>
<h3 class="mb-4">Username : <?php echo $_SESSION['username'] ;?></h3>
<h3 class="mb-4">Role : <?php echo $_SESSION['role'] ;?></h3>
<h3 class="mb-4">Tier : <?php 

if($_SESSION['tier'] == 'standard'){
  echo 'No Tier';
}
elseif($_SESSION['tier'] == 'silver'){
  echo 'Silver Tier';
}
elseif($_SESSION['tier'] == 'gold'){
  echo 'Gold Tier';
}
elseif($_SESSION['tier'] == 'platinum'){
  echo 'Platinum Tier';
}
else{
  echo $_SESSION['tier'] ;
}




?></h3>

<?php if ($_SESSION['role'] == 'seller' or $_SESSION['role'] == 'warehouse'){
  echo '<a href="adminpage.php" class="btn btn-primary btn-block mb-4">Manage Data</a>';
} ;?>
        </div>
        <div class="col-7">
            <div class="row mx-4 mb-4 bg-white rounded p-5">
                <a href="order.php"><h3>ดูรายละเอียดประวัติการสั่งซื้อ</h3></a>
            </div>
            <div class="row mx-4 mb-4 bg-white rounded p-5">
            <h3>ที่อยู่</h3>
            </div>
        </div>
    </div>
</div>
      </section>
<?php
footer();
?>


    
</body>

</html>