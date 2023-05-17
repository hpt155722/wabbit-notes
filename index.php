<?php require("script.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="animations.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="main.js"></script>
    
    <title>Wabbit Notes - Login</title>

</head>
<body>
    <div class = cover></div>
    <div class = "verContainer" style = "height: 80%;">
        <div class = "verContainer" style = "height: 55%;">
                <img src = "resources/images/logo.png" class = "logoAtLogIn">
                <p class = "title"> wabbit notes.</p>
                <br>
                <br>
                <div class = "logInContainer">
                    
                    <form id = "signUpForm" method = "post" autocomplete="off">
                        <div class = "verContainer">
                            <p> sign up.</p>
                            <input type="text" name="username" placeholder="create a username" maxlength="100" size="50" required value="<?php echo $username; ?>" >
                            <br>
                            <input type="text" name="password" placeholder = "create a password" maxlength="100" size="50" style = "-webkit-text-security: square;" required value="<?php echo $password; ?>">
                            <br>
                            <input class = "button" type="submit" name="sign-up" value="create account">
                        </div>
                    </form>

                    <form id = "logInForm" method = "post" autocomplete="off">
                        <div class = "verContainer">
                            <p> log in.</p>
                            <p class="error login_error">
                                <?php echo $login_error; ?>
                            </p>
                            <input type="text" name="username" placeholder="enter your username" maxlength="100" size="50" required value="<?php echo $username; ?>" >
                            
                            <br>
                            <input type="text" name="password" placeholder = "enter your password" maxlength="100" size="50" style = "-webkit-text-security: square;" required value="<?php echo $password; ?>">
                            <br>
                            <input class = "button" type="submit" name="log-in" placeholder = "log in" value="log in.">
                        </div>
                    </form>
                    <br>
                    <div class = "horContainer" style = "width: 50%;">
                        
                        <p id = "mode" class = "plink" onclick = "userChangeMode()"> sign up. </p>
                    </div>
                </div>
        </div>

        
        
        
    </div>
</body>
</html>