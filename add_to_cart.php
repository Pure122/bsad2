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
<?php
  // Retrieve the passed data from the form
  $username = $_POST['username'];
  $product_id = $_POST['product_id'];
  $game_name = $_POST['game_name'];
  $game_price = $_POST['game_price'];

  // Construct the SQL query to insert the data into the database
  $sql = "INSERT INTO cart_items(username,product_id, game_name, game_price) VALUES ('$username','$product_id', '$game_name', '$game_price')";
  $db->exec($sql);


  $sql ="SELECT * from cart_items";

  $ret = $db->query($sql);
  echo "<div>";
  echo "<table>";
  echo "<tr class='border-bottom'><td><h3>username</h3></td><td><h3>product_id</h3></td><td><h3>game_name</h3></td><td><h3>game_price</h3></td></tr>";
  while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "<tr class='border-bottom'>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['product_id']."</td>";
      echo "<td>".$row['game_name']."</td>";
      echo "<td>".$row['game_price']."</td>";
      echo "</tr>";
  }
  echo "</table>";
  echo "</div>";


?>
<?php
footer();
?>


    
</body>

</html>