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
if(isset($_POST['add'])){
  if(isset($_SESSION['cart'])){
    $itme_array_id = array_column($_SESSION['cart'],"cardid"); 
    if(in_array($_POST['cardid'],$itme_array_id)){
      $indexa = array_search($_POST['cardid'],$itme_array_id);
       $_SESSION['cart'][$indexa]['qty'] +=$_POST['qty'];
    }
    else{
    $item_array = array(
      'cardid'=>$_POST['cardid'],
      'qty' => $_POST['qty']
    );
    $_SESSION['cart'][] = $item_array;
    }
  }else{
    $item_array = array(
      'cardid'=>$_POST['cardid'],
      'qty' => $_POST['qty']
    );
    $_SESSION['cart'][0] = $item_array;
 
   }
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

      <section class="rec-wrapper py-5 home-wrapper-2">
    <div class="container-xxl">
      <div class="row">
        <div class="col-12">
          
        </div>
<?php

  if(isset($_GET['cat'])){
    $cate = $_GET['cat'];
    if($cate == 'all'){
    $query = "SELECT * FROM Products";
  }
  else{
    $query = "SELECT * FROM Products where Prod_Category = '$cate'";
  }
  }
  
  elseif(isset($_GET['search'])){
    $search = $_GET['search'];
    $query = "SELECT * from Products where Prod_Name like '%$search%'";
   }


  $ret = $db->query($query);
  $numrow = 0;
    while($row = $ret->fetchArray(SQLITE3_ASSOC)){
    prodcard($row['Prod_Name'],$row['Prod_Desc'],$row['Prod_Price'],$row['ProdID'],$row['Prod_Mainpic'],$row['Prod_Quantity']);
    $numrow++;
  }

  if($numrow == 0){
    echo '<div class="py-5 text-center">

    <h1 class="text-danger">Can\'t find product</h1>

    </div>';
  }
?>
      </div>
    </div>
      </section>
<?php
footer();
?>


    
</body>

</html>