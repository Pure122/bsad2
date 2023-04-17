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
    <form action="login_db.php" method="POST">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required="required">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="text" name="password" required="required">
        </div>
        <button type='submit' name="login" class='btn'>login</button>
        <p>Not a member yet <a href="reg.php">Sign up</a></p>
    </form>
</body>
</html>