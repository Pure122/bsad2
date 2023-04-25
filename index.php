<?php
require_once('components.php');
include('server.php');
session_start();
if (!isset($_SESSION['username'])){
  $_SESSION['regmsg'] = 'You must log in first';
  
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
<section class="home-wrapper-1 pt-5">
        <div class="container-xxl">
          <h1 class="text-center text-white pt-5">คุณอาจชอบ</h1>
          <div class="row w-75 m-auto">
            <div class="col">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="prop.php?idg=101">
                  <img src="picture/supersmash.avif" class="img-fluid d-block p-0" alt="..." style="width:100%;" />
                </a>
                </div>
                <div class="carousel-item">
                <a href="prop.php?idg=102">
                    <img src="picture/animalcross.avif" class="img-fluid d-block p-0" alt="..." style="width:100%;"/>
                  </a>
                  </div>
                  <div class="carousel-item">
                  <a href="prop.php?idg=103">
                    <img src="picture/zelda.avif" class="img-fluid d-block p-0" alt="..." style="width:100%;"/>
                    </a>  
                  </div>
                <!-- <?php
                $queryhome = "SELECT * FROM Products order by random() LIMIT 3";
                $check = 0;
                $reth = $db->query($queryhome);
                while($rowh = $reth->fetchArray(SQLITE3_ASSOC)){
                if($check == 0){
                  echo '
                
                  <div class="carousel-item active">
                    <img src="'.$rowh['Prod_Pic1'].'" class="img-fluid d-block h-75 w-100 p-0" alt="..." style="width:100%;" />
                  </div>';
                }
                else{
                  echo '
                  <div class="carousel-item">
                    <img src="'.$rowh['Prod_Pic1'].'" class="img-fluid d-block h-75 w-100 p-0" alt="..." style="width:100%;"/>
                  </div>
                  ';}
                  $check++;
                }
                
                ?> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="rec-wrapper py-5 home-wrapper-2">
    <div class="container-xxl">
      <div class="row">
        <div class="col-12">
          <h3 class='text-white'>Recommended</h3>
        </div>
<?php

  $query = "SELECT * FROM Products ORDER BY Prod_Name ASC limit 3";
  $ret = $db->query($query);
  while($row = $ret->fetchArray(SQLITE3_ASSOC)){
    prodcard($row['Prod_Name'],$row['Prod_Desc'],$row['Prod_Price'],$row['ProdID'],$row['Prod_Mainpic'],$row['Prod_Quantity']);
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