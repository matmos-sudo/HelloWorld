<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Test</title>
    <link rel="stylesheet" href="css/style.css">
    <script rel="javascript" src="js/js.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
<h1 class="H1">Welcome <?php echo htmlspecialchars($_SESSION["username"]);?> your password is: <?php echo htmlspecialchars($_SESSION["password"]);?> !</h1>
</body>
</html>



