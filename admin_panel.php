<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Election Sri Lanka Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
         <?php
        if (isset($_GET["msgAlertProfile"])) {echo "<script>alert('" . $_GET["msgAlertProfile"] . "');</script>"; echo '<BODY onLoad="toggleadministrators();toggleadminprofilepopup();">';}
        $msgProfile = "";
        if (isset($_GET["msgProfile"])) {$msgProfile = $_GET["msgProfile"]; echo '<BODY onLoad="toggleadminprofilepopup();">';}
        
        if (isset($_GET["msgAlertPassword"])) {echo "<script>alert('" . $_GET["msgAlertPassword"] . "');</script>"; echo '<BODY onLoad="toggleadminprofilepopup();">';}
        $msgPassword = "";
        if (isset($_GET["msgPassword"])) {$msgPassword = $_GET["msgPassword"]; echo '<BODY onLoad="toggleadminprofilepopup();toggleadminpasswordchangepopup();">';}
        
        
        if (isset($_GET["msgAlertAdmin"])) {echo "<script>alert('" . $_GET["msgAlertAdmin"] . "');</script>"; echo '<BODY onLoad="toggleadministrators();">';}
        $msgAdmin = "";
        if (isset($_GET["msgAdmin"])) {$msgAdmin = $_GET["msgAdmin"]; echo '<BODY onLoad="toggleadministrators();toggleadminregpopup();">';}
        $keywordAdmin = "";
        if (isset($_GET["searchAdmin"])) {$keywordAdmin = $_GET["searchAdmin"]; echo '<BODY onLoad="toggleadministrators();">';}
        
        
        if (isset($_GET["msgAlertCandidate"])) {echo "<script>alert('" . $_GET["msgAlertCandidate"] . "');</script>"; echo '<BODY onLoad="togglecandidates();">';}
        $msgCandidate = "";
        if (isset($_GET["msgCandidate"])) {$msgCandidate = $_GET["msgCandidate"]; echo '<BODY onLoad="togglecandidates();togglecandidateregpopup();">';}
        $keywordCandidate = "";
        if (isset($_GET["searchCandidate"])) {$keywordCandidate = $_GET["searchCandidate"]; echo '<BODY onLoad="togglecandidates();">';}
        

        if (isset($_GET["msgAlertParty"])) {echo "<script>alert('" . $_GET["msgAlertParty"] . "');</script>"; echo '<BODY onLoad="toggleparties();">';}
        $msgParty = "";
        if (isset($_GET["msgParty"])) {$msgParty = $_GET["msgParty"]; echo '<BODY onLoad="toggleparties(); togglepartyregpopup();">';}
        $keywordParty = "";
        if (isset($_GET["searchParty"])) {$keywordParty = $_GET["searchParty"]; echo '<BODY onLoad="toggleparties();">';}
        
        
        if (isset($_GET["msgAlertPosition"])) {echo "<script>alert('" . $_GET["msgAlertPosition"] . "');</script>"; echo '<BODY onLoad="togglepositions();">';}
        $msgPosition = "";
        if (isset($_GET["msgPosition"])) {$msgPosition = $_GET["msgPosition"]; echo '<BODY onLoad="togglepositions();togglepositionregpopup();">';}
        $keywordPosition = "";
        if (isset($_GET["searchPosition"])) {$keywordPosition = $_GET["searchPosition"]; echo '<BODY onLoad="togglepositions();">';}
        
        
        if (isset($_GET["msgAlertVoter"])) {echo "<script>alert('" . $_GET["msgAlertVoter"] . "');</script>"; echo '<BODY onLoad="togglevoters();">';}
        $keywordVoter = "";
        if (isset($_GET["searchVoter"])) {$keywordVoter = $_GET["searchVoter"]; echo '<BODY onLoad="togglevoters();">';}
        
        
        $keywordResultParty = "";
        if (isset($_GET["searchResultParty"])) {$keywordResultParty = $_GET["searchResultParty"];echo '<BODY onLoad="toggleresults();">';}
        $keywordResultCandidate = "";
        if (isset($_GET["searchResultCandidate"])) {$keywordResultCandidate = $_GET["searchResultCandidate"];echo '<BODY onLoad="toggleresults();">';}
        ?>
    </head>
    <body>   
        <?php include './admin_panel_header.php'; ?>
        <div class="shader" id="shader"></div>
        <div class="dashboard-container">
            <ul>
                <li onclick="toggleadministrators();" id="adminchild">Administrators</li>
                <li onclick="togglecandidates();" id="candidatechild">Candidates</li>
                <li onclick="toggleparties();" id="partychild">Parties</li>
                <li onclick="togglepositions();" id="positionchild">Positions</li>
                <li onclick="toggleresults();" id="resultchild">Results</li>
                <li onclick="togglevoters();" id="voterchild">Voters</li>
            </ul>
        </div>

        <?php
        include './administrators.php';
        include './candidates.php';
        include './parties.php';
        include './positions.php';
        include './results.php';
        include './voters.php';
        ?>


        <?php include './admin_panel_footer.php'; ?>

        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
