<?php
require_once('components.php');
session_start();
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
    <?php navhead(); ?>
    <section class="home-wrapper-1 py-5">
        <div class="container-xxl text-center">
            <div class="row w-50 m-auto">
                <div class="col-12">
                    <div class="header">
        <h1 class="text-white mb-4">Sign up</h1>
    </div>
    <form action="reg_db.php" method="POST">
        <div class="form-outline mb-4">
            <input type="text" name="username" required="Username is required" class="form-control">
            <label for="username" class="form-label text-white">Username</label>
            
        </div>
        <div class="form-outline mb-4">
            <input type="text" name="email" required="Email is required" class="form-control">
            <label for="email" class="form-label text-white">Email</label>
            
        </div>
        <div class="form-outline mb-4">
            <input type="password" name="password" required="Password is required" class="form-control">
            <label for="password" class="form-label text-white">Password</label>
            
        </div>
        <div class="form-outline mb-4">
            <input type="password" name="password2" required="Password is required" class="form-control">
            <label for="password" class="form-label text-white">Confirm Password</label>
            
        </div>
        <div class="error">
                <h3 class="text-danger mb-4">
                    <?php
                    if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    }
                    ?>
                </h3>
            </div>
        <button type='submit' name="register" class='btn btn-primary btn-block mb-4'>Register</button>
        <div class="text-center">
        <p class="text-white">Already a member? <a href="login.php">Sign in</a></p>
        </div>
    </form>
                </div>
            </div>
        </div>
    </section>
    
        <?php
    footer();
    ?>
</body>
</html>