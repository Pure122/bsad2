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
    <style>
      /* body
{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
} */
.container
{
  position: relative;
  width: 1200px;
  height: 300px;
  margin: 240px auto;
}
.container .box
{
position: relative;
/* width: calc(400px - 30px);
height: calc(300px - 30px); */
width: 500px;
height: 330px;

background: rgba(70, 217, 76, 0.5);
float: left;
margin: 15px;
box-sizing: border-box;
overflow: hidden;
border-radius: 10px;
}
.container .box .icon
{
  position:absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #46D94C;
  transition: 0.5s;
  z-index: 1;
}
.container .box:hover .icon
{
  top: 20px;
  left: calc(50% - 40px);
  width: 80px;
  height: 80px;
  border-radius: 50%;
}
/* .container .box .icon .fa
{
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-100%, -100%);
  font-size: 80px;
  transition: 0.5s;
  color: #fff;
} */
/* .container .box:hover .icon .fa
{
  font-size: 4000px;
} */
.container .box .content
{
  position: absolute;
  top: 100%;
  height: calc(100% - 1000px);
  text-align: start;
  padding: 20px;
  box-sizing: border-box;
  transition: 0.5s;
  opacity: 0;
}
.container .box:hover .content
{
  top: 100px;
  opacity: 1;
}
.container .box .content h3
{
  margin: 0 0 10px;
  padding: 0;
  color: black;
  font-size: 24px;
}
.container .box .content p
{
  margin: 0;
  padding: 0;
  color: #fff;
  font-size: 24px;
}
.icon{
  text-align: center;
  
}
    </style>
</head>

<body>

<?php
navhead();
?>
<section class="home-wrapper-1 py-5">


<div class="container">
        <div class="box">
            <div class="icon"><i style="margin-top:30%;font-size:30px" class="fa fa-user-circle" aria-hidden="true"></i></div>
            <div class="content">
                <h3>User Infomation</h3>
                <h3 class="">Username : <?php echo $_SESSION['username'] ;?></h3>
                <h3 class="">Role : <?php echo $_SESSION['role'] ;?></h3>
                <h3 class="">Tier : <?php 



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



?>
            
            </div>
        </div>
    </div>




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




?>

</h3>

<?php if ($_SESSION['role'] == 'seller' or $_SESSION['role'] == 'warehouse'){
  echo '<a href="adminpage.php" class="btn btn-primary btn-block mb-4">Manage Data</a>';
} 
$sql = "SELECT count(coid) FROM customerorder WHERE id = ".$_SESSION['userid']." and status in ('shipping', 'new')";
    $ret = $db->query($sql);
    $row = $ret->fetchArray(SQLITE3_ASSOC);?>
        </div>
        <div class="col-7">
            <div class="row mx-4 mb-4 bg-white rounded p-5">
                <a href="order.php"><h3>กำลังดำเนินการอีก <?=$row['count(coid)']?> รายการ</h3></a>
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