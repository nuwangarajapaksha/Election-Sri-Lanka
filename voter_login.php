<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/login_style.css"/>
    </head>
    <body> 
        <div class="login-container login-popup" id="voterlogin">
            <img src="img/Close_Cross_Icon.png" onclick="togglevoterloginpopup();"/>
            <p>Voter Login</p>
            <form method="post" action="action/voter_login_check.php">
                    <p>NIC</p>
                    <input type="text" name="nic" id="nic" placeholder="NIC"/>
                    <p>Password</p>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                    <button>Login</button><label><?php echo $msgVoter; ?></label>
            </form>
        </div>
    </body>
</html>
