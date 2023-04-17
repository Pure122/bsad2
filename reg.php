<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>Register</h1>
    </div>
    <form action="reg_db.php" method="POST">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required="required">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email" required="required">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="text" name="password" required="required">
        </div>
        <div class="input-group">
            <label for="password">Confirm Password</label>
            <input type="text" name="password2" required="required">
        </div>
        <button type='submit' name="register" class='btn'>Register</button>
    </form>
    <p>Already a member<a href='login.php'> Sign in</a></p>
</body>
</html>