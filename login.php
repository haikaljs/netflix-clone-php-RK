<?php
    if(isset($_POST["submitButton"])){
  
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]) ;
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]) ;
     
        $success = $account->register($firstName, $lastName, $username,$email, $email2,$password,$password2);
       
        if($success){
            // Store session
            header("Location: index.php");
        }
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
            <div class="header">
                <img src="./assets/images/logo.png" title="Logo" alt="Site Logo">
                <h3>Sign In</h3>
                <span>to continue to Netflix</span>
                
            </div>
            <form method="POST">
               
                <input type="text" name="userName" placeholder="Username"  required>
                <input type="password" name="password" placeholder="Password"  required>
                
                <input type="submit" name="submitButton" value="SUBMIT">
            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
        </div>
    </div>
</body>
</html>