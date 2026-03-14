<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Test</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Special+Elite&display=swap" rel="stylesheet">
    <script src="js/javascript.js" defer></script>
</head>
<body>
<h1 class="H1">Please log in or sign up.</h1>
<div class="login">
    <form method="POST" action="include/handler.php">
        Enter your username:<br>
        <input id="username" class="pole" type="text" placeholder="username" name="username" required><br>
        <span class="error" id="username-error"></span><br>

        Enter your password:<br>
        <input id="password" class="pole" type="password" placeholder="password" name="password" required><br>
        <span class="error" id="password-error"></span><br>
        <input type="submit" value="SUBMIT" class="submit">
    </form>
    <a class="signup" href="signup.php">SIGN UP</a>
</div>
</body>
<footer>
</footer>
</html>


