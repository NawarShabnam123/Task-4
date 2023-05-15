<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="top">
        <div class="t1">
            <h1 onclick="window.location='./';">Company Name</h1>
        </div>
        <div class="t2">
            <a href="./">Home</a>
            <a href="#">About</a>
            <a href="./signup.php">Sign Up</a>
        </div>
    </div>

    <div id="reg">
        <div class="form">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="password" name="pass" id="pass" placeholder="Enter password">
            <input type="submit" name="login" id="login" value="Login">

            <div id="msg"><p></p></div>
        </div>
    </div>

    <script src="./js/loginValidation.js"></script>
</body>
</html>