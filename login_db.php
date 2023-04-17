<?php
include('server.php');
session_start();

$error = array();
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
if (count($error) == 0){
    $query = "SELECT * FROM registersys WHERE username = '$username' and password = '$password'";
    $ret = $db->query($query);
    $row = $ret->fetchArray(SQLITE3_ASSOC);
}

if ($row){
    $_SESSION['username'] = $username;
    $_SESSION['success'] = 'You are now logged in';
    header('location:index.php');
} 
else{
    array_push($error,'Wrong username/password combination');
    echo '<p></p>Wrong username/password combination <a href="login.php">Login</a></p>';
}
?>