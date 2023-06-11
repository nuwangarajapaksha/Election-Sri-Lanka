<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registration_style.css"/>
    </head>
    <body>
        <div class="reg-container reg-popup" id="candidatereg">
            <img src="img/Close_Cross_Icon.png" onclick="togglecandidateregpopup();"/>
            <p>Candidate Registration</p>
            <form method="post" action="action/candidate_register.php" enctype="multipart/form-data">
                <div class="column">
                    <p>Election No<sup>*</sup></p>
                    <input type="text" name="no" id="no" placeholder="Election No"/>
                    <p>Party<sup>*</sup></p>
                    <select name="party" id="partyy">
                        <?php
                        $query = "SELECT * FROM party WHERE party_status = '1'";
                        $result = $connection->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row["party_no"]; ?>"><?php echo $row["party_name_short_form"]; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                    <p>Picture<sup>*</sup></p>
                    <input type="file" name="picture" id="picture"/>
                    <button>Register</button><label><?php echo $msgCandidate; ?></label>
                </div>
                <div class="column">
                    <p>Name<sup>*</sup></p>   
                    <input type="text" name="name" id="name" placeholder="Name"/>
                    <p>NIC<sup>*</sup></p>
                    <input type="text" name="nic" id="nic" placeholder="NIC"/>
                    <p>City<sup>*</sup></p>
                    <input type="text" name="city" id="city" placeholder="City"/>
                </div>
            </form>
        </div>
    </body>
</html>
