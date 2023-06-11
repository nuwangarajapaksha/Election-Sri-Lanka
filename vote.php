<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vote</title>
        <link rel="stylesheet" type="text/css" href="css/vote_style.css"/>
    </head>
    <?php
    $msgProfile = "";
    $msgPassword = "";
    $msgVoterReg = "";
    $msgVoter = "";
    $msgAdmin = "";
    $keywordParty = "";
    $partyNo = "";
    if (isset($_GET["msgAlertVote"])) {
        echo "<script>alert('" . $_GET["msgAlertVote"] . "');</script>";
    }
    if (isset($_GET["partyNo"]) && $_GET["partyNo"] != "") {
        $partyNo = $_GET["partyNo"];
//        $keywordParty = $_GET["partyNo"];
        echo '<BODY onLoad="header();togglecandidatecolumnactive();">';
    }
    if (isset($_GET["searchParty"])) {
        $keywordParty = $_GET["searchParty"];
    }
    $keywordCandidate = "";
    if (isset($_GET["searchCandidate"])) {
        $keywordCandidate = $_GET["searchCandidate"];
    }
    ?>
    <body onload="header();">
        <?php
        include './header.php';
        if (isset($_SESSION["voter_is_login"])) {
            if ($_SESSION["voter_is_login"] != true) {
                header("Location: index.php?msgAdmin=Login First !");
                die();
            }
        } else {
            header("Location: index.php?msgAdmin=Login First !");
            die();
        }
        ?>
        <div class="vote-container">
            <div class="column party-column">
                <form method="get" action="vote.php">
                    <input type="text" name="searchParty" id="searchParty" value="<?php echo $keywordParty; ?>" placeholder="Search"/>
                    <input type="hidden" name="partyNo" id="partyNo" value="<?php echo $partyNo; ?>"/>
                    <input type="hidden" name="searchCandidate" id="searchCandidate" value="<?php echo $keywordCandidate; ?>"/>
                    <button>Search</button>
                </form>
                <table>
                    <tr>
                        <th>Party No</th>
                        <th>Mark</th>
                        <th>Name</th>
                        <th>Short Form</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM party WHERE (party_no LIKE '%" . $keywordParty . "%' OR party_name LIKE '%" . $keywordParty . "%' "
                            . "OR party_name_short_form LIKE '%" . $keywordParty . "%') AND party_status = '1'";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr class="vote-content">
                                <td><?php echo $row["party_no"]; ?></td>
                                <td><img src="img/<?php echo $row["party_mark"]; ?>"/></td>
                                <td><?php echo $row["party_name"]; ?></td>
                                <td><?php echo $row["party_name_short_form"]; ?></td>
                                <td class="select"><a href="vote.php?partyNo=<?php echo $row["party_no"]; ?>&searchParty=<?php echo $keywordParty; ?>"><button>Select</button></a></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
            <div class="column candidate-column" id="candidatecolumn">
                <form method="get" action="vote.php">
                    <input type="hidden" name="searchParty" id="searchParty" value="<?php echo $keywordParty; ?>"/>
                    <input type="hidden" name="partyNo" id="partyNo" value="<?php echo $partyNo; ?>"/>
                    <input type="text" name="searchCandidate" id="searchCandidate" value="<?php echo $keywordCandidate; ?>" placeholder="Search"/>
                    <button>Search</button>
                </form>
                <table>
                    <tr>
                        <th>Election No</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>City</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM candidate WHERE (candidate_election_no LIKE '%" . $keywordCandidate . "%' "
                            . "OR candidate_name LIKE '%" . $keywordCandidate . "%' OR candidate_nic LIKE '%" . $keywordCandidate . "%') "
                            . "AND party_no = '" . $partyNo . "' AND candidate_status = '1'";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr class="vote-content">
                                <td><?php echo $row["candidate_election_no"]; ?></td>
                                <td><img src="img/<?php echo $row["candidate_picture"]; ?>"/></td>
                                <td><?php echo $row["candidate_name"]; ?></td>
                                <td><?php echo $row["candidate_city"]; ?></td>
                                <td class="select">
                                    <form method="post" action="action/vote_submit.php">
                                        <input type="hidden" name="electionNo" id="electionNo" value="<?php echo $row["candidate_election_no"]; ?>"/>
                                        <input type="hidden" name="searchParty" id="searchParty" value="<?php echo $keywordParty; ?>"/>
                                        <input type="hidden" name="partyNo" id="partyNo" value="<?php echo $partyNo; ?>"/>
                                        <input type="hidden" name="searchCandidate" id="searchCandidate" value="<?php echo $keywordCandidate; ?>"/>
                                        <button>Vote</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>

        <?php include './footer.php'; ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
