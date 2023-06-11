<!DOCTYPE html>
<?php
$query = "SELECT * FROM admin ORDER BY admin_no DESC";
$result = $connection->query($query);
$adminNo = 1;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $adminNo = $row["admin_no"]+1;
}
?>
<html>
    <head>
        <meta charset=(UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registration_style.css"/>     
    </head>
    <body> 
        <div class="reg-container reg-popup" id="adminreg">
            <img src="img/Close_Cross_Icon.png" onclick="toggleadminregpopup();"/>
            <p>Administrator Registration</p>
            <form method="post" action="action/admin_register.php">
                <div class="column">
                    <p>Administrator No<sup>*</sup></p>
                    <input type="text" name="no" id="no" value="<?php echo $adminNo; ?>" placeholder="Administrator No" readonly/>
                    <p>Name<sup>*</sup></p>
                    <input type="text" name="name" id="name" placeholder="Name"/>
                    <p>NIC<sup>*</sup></p>
                    <input type="text" name="nic" id="nic" placeholder="NIC"/>
                    <p>Contact No<sup>*</sup></p>
                    <input type="text" name="contactNo" id="contactNo" placeholder="Contact No"/>
                    <button>Register</button><label><?php echo $msgAdmin; ?></label>

                </div>
                <div class="column">
                    <p>City<sup>*</sup></p>   
                    <input type="text" name="city" id="city" placeholder="City"/>
                    <p>Username<sup>*</sup></p>
                    <input type="text" name="username" id="username" placeholder="Username"/>
                    <p>Password<sup>*</sup></p>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                    <p>Confirm Password<sup>*</sup></p>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password"/>
                </div>
            </form>
        </div>
    </body>
</html>


