<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Election Sri Lanka</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <?php
         if (isset($_GET["msgAlertProfile"])) {echo "<script>alert('" . $_GET["msgAlertProfile"] . "');</script>"; echo '<BODY onLoad="togglevoterprofilepopup();">';}
         $msgProfile = "";
         if (isset($_GET["msgProfile"])) {$msgProfile = $_GET["msgProfile"]; echo '<BODY onLoad="togglevoterprofilepopup();">';}
        
         
         if (isset($_GET["msgAlertPassword"])) {echo "<script>alert('" . $_GET["msgAlertPassword"] . "');</script>"; echo '<BODY onLoad="togglevoterprofilepopup();">';}
         $msgPassword = "";
         if (isset($_GET["msgPassword"])) {$msgPassword = $_GET["msgPassword"]; echo '<BODY onLoad="togglevoterprofilepopup();togglevoterpasswordchangepopup();">';}
         
         
         if (isset($_GET["msgAlertVoterReg"])) {echo "<script>alert('" . $_GET["msgAlertVoterReg"] . "');</script>";}
         $msgVoterReg = "";
         if (isset($_GET["msgVoterReg"])) {$msgVoterReg = $_GET["msgVoterReg"]; echo '<BODY onLoad="togglevoterregpopup();">';}
         
         
         $msgVoter = "";
         if (isset($_GET["msgVoter"])) {$msgVoter = $_GET["msgVoter"]; echo '<BODY onLoad="togglevoterloginpopup();">';}
         
         
         $msgAdmin = "";
         if (isset($_GET["msgAdmin"])) {$msgAdmin = $_GET["msgAdmin"]; echo '<BODY onLoad="toggleadminloginpopup();">';}
        ?>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="shader" id="shader"></div>
        <?php include './slider.php'; ?>

        <div class="index-container">
            <h1>General Election</h1>
            <h3>Sri Lanka 2021</h3><br><br>
            <h4>Use your Election Power in the Cyber Space</h4><br>
            <center><p>The Parliament has 225 members, elected for a five-year term, 
                    196 members elected in multi-seat constituencies through proportional 
                    representation system where each party is allocated a number of seats from 
                    the quota for each district according to the proportion of the total vote that 
                    party obtains in the district.</p></center>
        </div>

        <?php include './footer.php'; ?>

        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
