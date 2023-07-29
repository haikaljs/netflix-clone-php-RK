<?php
    if(isset($_POST["submitButton"])){
        echo "Form was submitted";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Netflix</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles.css">
</head>
<body>
    <div class="signInContainer">
        <div class="column">
            <form method="POST">
                <input type="text" name="firstName" placeholder="First name" required>
                <input type="text" name="lasttName" placeholder="Last name"  required>
                <input type="text" name="userName" placeholder="Username"  required>
                <input type="email" name="email" placeholder="Email"  required>
                <input type="email" name="email2" placeholder="Confirm email"  required>
                <input type="password" name="password" placeholder="Password"  required>
                <input type="password" name="password2" placeholder="Confirm Password"  required>
                <input type="submit" name="submitButton" value="SUBMIT">
            </form>
        </div>
    </div>
</body>
</html>