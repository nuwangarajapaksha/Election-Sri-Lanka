<!DOCTYPE html>
<?php
$query = "SELECT * FROM party ORDER BY party_no DESC";
$result = $connection->query($query);
$partyNo = 1;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $partyNo = $row["party_no"]+1;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registration_style.css"/>
    </head>
    <body>
       <div class="reg-container reg-popup" id="partyreg">
           <img src="img/Close_Cross_Icon.png" onclick="togglepartyregpopup();"/>
            <p>Party Registration</p>
            <form method="post" action="action/party_register.php" enctype="multipart/form-data">
                    <p>Party No<sup>*</sup></p>
                    <input type="text" name="no" id="no" value="<?php echo $partyNo; ?>" placeholder="Party No" readonly/>
                    <p>Mark<sup>*</sup></p>
                    <input type="file" name="mark" id="mark"/>
                    <p>Name<sup>*</sup></p>
                    <input type="text" name="name" id="name" placeholder="Name"/>
                    <p>Short Form<sup>*</sup></p>
                    <input type="text" name="shortForm" id="shortForm" placeholder="Name"/>
                    <button>Register</button><label><br>&nbsp;&nbsp;<?php echo $msgParty; ?></label>
            </form>
        </div>
    </body>
</html>
