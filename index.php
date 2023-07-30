<?php
    require_once "./includes/config.php";
    if(!isset($_SESSION["userLoggedIn"])){
        header("Location: register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    index page
</body>
</html>