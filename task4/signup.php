<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            <a href="./">Login</a>
        </div>
    </div>

    <div id="reg">
        <div class="form">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="password" name="pass1" id="pass1" placeholder="Enter password">
            <input type="password" name="pass2" id="pass2" placeholder="Re-type password">
        
            <input type="submit" name="signup" id="signup" value="Sign Up">

            <div id="msg"><p></p></div>
        </div>
    </div>
    
    <script src="./js/signupValidation.js"></script>
</body>
</html>