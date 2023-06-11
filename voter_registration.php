<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registration_style.css"/>
    </head>
    <body>
        <div class="reg-container reg-popup" id="voterreg">
            <img src="img/Close_Cross_Icon.png" onclick="togglevoterregpopup();"/>
            <p>voter Registration</p>
            <form method="post" action="action/voter_register.php">
                <div class="column">
                    <p>NIC<sup>*</sup></p>
                    <input type="text" name="nic" id="nic" placeholder="NIC"/>
                    <p>Name<sup>*</sup></p>
                    <input type="text" name="name" id="name" placeholder="Name"/>
                    <p>Contact No<sup>*</sup></p>
                    <input type="text" name="contactNo" id="contactNo" placeholder="Contact No"/>
                    <button>Register</button><label><?php echo $msgVoterReg; ?></label>
                </div>
                <div class="column">
                    <p>City<sup>*</sup></p>   
                    <input type="text" name="city" id="city" placeholder="City"/>
                    <p>Password<sup>*</sup></p>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                    <p>Confirm Password<sup>*</sup></p>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"/>
                </div>
            </form>
        </div>
    </body>
</html>
