<?php
require_once("./includes/config.php");
require_once("./includes/classes/FormSanitizer.php");
require_once("./includes/classes/Constants.php");
require_once("./includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST["submitButton"])){
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]) ;
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]) ;
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]) ;
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]) ;
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]) ;
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]) ;
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]) ;

        $account->register($firstName, $lastName, $username,$email, $email2,$password,$password2);
       

        echo "<br/>";
        echo $firstName;
        echo "<br/>";
        echo $lastName;
        echo "<br/>";
        echo $username;
        echo "<br/>";
        echo $email;
        echo "<br/>";
        echo $email2;
        echo "<br/>";
        echo $password;
        echo "<br/>";
        echo $password2;
        echo "<br/>";
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
                <h3>Sign Up</h3>
                <span>to continue to Netflix</span>
                
            </div>
            <form method="POST">

                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" placeholder="First name" required>

                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <input type="text" name="lastName" placeholder="Last name"  required>

                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <input type="text" name="username" placeholder="Username"  required>

                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <input type="email" name="email" placeholder="Email"  required>

                <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                <?php echo $account->getError(Constants::$emailsInvalid); ?>
                <input type="email" name="email2" placeholder="Confirm email"  required>
                <input type="password" name="password" placeholder="Password"  required>
                <input type="password" name="password2" placeholder="Confirm Password"  required>
                <input type="submit" name="submitButton" value="SUBMIT">
            </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
        </div>
    </div>
    
</body>
</html>