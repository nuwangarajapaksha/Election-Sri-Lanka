<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registration_style.css"/>
    </head>
    <body>
        <div class="reg-container reg-popup" id="adminprofile">
            <img src="img/Close_Cross_Icon.png" onclick="toggleadminprofilepopup();"/>
            <p>Administrator Profile</p>
            <form method="post" action="action/admin_profile_update.php">
                <div class="column">
                    <p>Administrator No<sup>*</sup></p>
                    <input type="text" name="no" id="no" value="<?php echo $activeNo; ?>" placeholder="Administrator No" readonly/>
                    <p>Name<sup>*</sup></p>
                    <input type="text" name="name" id="name" value="<?php echo $activeName; ?>" placeholder="Name"/>
                    <p>NIC<sup>*</sup></p>
                    <input type="text" name="nic" id="nic" value="<?php echo $activeNic; ?>" placeholder="NIC"/>
                    <p>Contact No<sup>*</sup></p>
                    <input type="text" name="contactNo" id="contactNo" value="<?php echo $activeContactNo; ?>" placeholder="Contact No"/>
                    <button>Save</button><label><?php echo $msgProfile; ?></label>
                </div>
                <div class="column">
                    <p>City<sup>*</sup></p>   
                    <input type="text" name="city" id="city" value="<?php echo $activeCity; ?>" placeholder="City"/>
                    <p>Username<sup>*</sup></p>
                    <input type="text" name="username" id="username" value="<?php echo $activeUsername; ?>" placeholder="Username"/>
                    <p>Password<sup>*</sup></p>
                    <input type="hidden" name="password" id="password" placeholder="Password"/>
                </div>
            </form>
            <button class="password-change-button" onclick="toggleadminpasswordchangepopup();">Change Password</button>
            <?php include './admin_password_change.php'; ?>
        </div>
    </body>
</html>
