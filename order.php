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
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php navhead(); ?>
  
  
<?php

if(isset($_POST['createpo'])){
    $address = $_POST['hnum']." ".$_POST['road']." ".$_POST['district']." ".$_POST['postal'];
    $oddate = date("Y-m-d h:i:sa");
    $sql1 = "INSERT INTO customerorder (id,date,address,status) VALUES (".($_SESSION['userid']).",\"$oddate\",\"$address\",\"new\")";
    $db->exec($sql1);
    $sql2 = "SELECT MAX(coid) as maxid FROM customerorder";
    $ret = $db->query($sql2);
    $row = $ret->fetchArray(SQLITE3_ASSOC);
    $lastrowid = $row['maxid'];

    
    if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        $ido = $value['cardid'];
    $qtyo = $value['qty'];
        $sql3 = "INSERT INTO customerorder_product (copid,ProdID,quantity) VALUES ('$lastrowid','$ido','$qtyo')";
        $db->exec($sql3);
        
        $sql4 = "UPDATE Products SET Prod_Quantity = Prod_Quantity - $qtyo where ProdID = $ido";
        $db->exec($sql4);

    }}
    unset($_SESSION['cart']);
}else{

}


?>
<section class="home-wrapper-1 py-5">
    <div class="container-xxl">
        <div class="row">
            <div class="col-7">

                    <?php
                    
                    $sql11 = "SELECT * FROM customerorder where id = ".($_SESSION['userid'])." and status in ('in progress', 'new')";
                    $ret11 = $db->query($sql11);
                   $retc = $db->query($sql11);
                   $rowc = $retc->fetchArray(SQLITE3_ASSOC);
                    // if (!empty($ret11->fetchArray(SQLITE3_ASSOC))){
                    //     print_r($ret11->fetchArray(SQLITE3_ASSOC));
                        if(empty($rowc)){
                            echo '<div>
                            <h1 class="text-white">You Have No Order</h1>
                            </div>';
                        }
                        
                    while($row11 = $ret11->fetchArray(SQLITE3_ASSOC)){
                        echo '<table class="table bg-white">
                        <tr>
                          <th>Product</th>
                          <th>OrderID</th>
                          <th>Name</th>
                          <th>Total Quantity</th>
                          <th>Price</th>
                        </tr>';
                        $sql12 = "SELECT * FROM customerorder_product where copid = ".($row11['coid'])." ";
                        $ret12 = $db->query($sql12);
                       
                        while($row12 = $ret12->fetchArray(SQLITE3_ASSOC)){
                            
                            $sql13 = "SELECT * FROM Products where ProdID = ".($row12['ProdID'])."";
                            $ret13 = $db->query($sql13);
                            
                            while($row13 = $ret13->fetchArray(SQLITE3_ASSOC)){
                                

                                $orpirce = (int)$row13['Prod_Price'];
                                $orqty = (int)$row12['quantity'];
                                echo '
                          <tr>
                          <td style="width:5%;"><img src="'.$row13['Prod_Mainpic'].'" class="img-fluid"></td>
                          <td>'.$row11['coid'].'</td>
                          <td>'.$row13['Prod_Name'].'</td>
                          <td>'.$row12['quantity'].'</td>
                          <td>'.number_format($orpirce*$orqty,2).'</td>
                          
                          </tr>
                          ';
                            }
                        }
            echo '</table>';
                    }
                    
                
                    ?>
            </div>
            <div class="col-5">
                <div class="bg-white rounded text-center p-5">
                   <h1>Your Order</h1> 
                   <h3>User : <?php echo $_SESSION['username']?></h3>
                   <h3>ID : <?php echo $_SESSION['userid']?></h3>
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