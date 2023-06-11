<!DOCTYPE html>
<?php
$query = "SELECT * FROM position ORDER BY position_no DESC";
$result = $connection->query($query);
$positionNo = 1;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $positionNo = $row["position_no"]+1;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registration_style.css"/>
    </head>
    <body>
         <div class="reg-container reg-popup" id="positionreg">
            <img src="img/Close_Cross_Icon.png" onclick="togglepositionregpopup();"/>
            <p>Position Registration</p>
            <form method="post" action="action/position_register.php">
                    <p>Position No<sup>*</sup></p>
                    <input type="text" name="no" id="no" value="<?php echo $positionNo; ?>" placeholder="Position No" readonly/>
                    <p>Position<sup>*</sup></p>
                    <input type="text" name="position" id="positionn" placeholder="Position"/>
                    <p>Description<sup>*</sup></p>
                    <textarea  name="description" id="description" placeholder="Description"></textarea>
                    <button>Register</button><br><label><?php echo $msgPosition; ?></label>
            </form>
        </div>
    </body>
</html>
