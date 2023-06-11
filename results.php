<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
    </head>
    <body onload="toggleresults();">
        <div class="child-container-disable" id="result">
            <div class="column party-column">
                <form method="get" action="admin_panel.php">
                    <input type="text" name="searchResultParty" id="searchResultParty" value="<?php echo $keywordResultParty; ?>" placeholder="Search"/>
                    <input type="hidden" name="searchResultCandidate" id="searchResultCandidate" value="<?php echo $keywordResultCandidate; ?>"/>
                    <button>Search</button>
                </form>
                <table>
                    <tr>
                        <th>Party No</th>
                        <th>Mark</th>
                        <th>Name</th>
                        <th>Short Form</th>
                        <th>votes</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM party WHERE (party_no LIKE '%" . $keywordResultParty . "%' OR party_name LIKE '%" . $keywordResultParty . "%' "
                            . "OR party_name_short_form LIKE '%" . $keywordResultParty . "%') AND party_status = '1' ORDER BY party_votes DESC";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr class="child-content">
                                <td><?php echo $row["party_no"]; ?></td>
                                <td><img src="img/<?php echo $row["party_mark"]; ?>"/></td>
                                <td><?php echo $row["party_name"]; ?></td>
                                <td><?php echo $row["party_name_short_form"]; ?></td>
                                <td><?php echo $row["party_votes"]; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
            <div class="column candidate-column">
                <form method="get" action="admin_panel.php">
                    <input type="hidden" name="searchResultParty" id="searchResultParty" value="<?php echo $keywordResultParty; ?>"/>
                    <input type="text" name="searchResultCandidate" id="searchResultCandidate" value="<?php echo $keywordResultCandidate; ?>" placeholder="Search"/>
                    <button>Search</button>
                </form>
                <table>
                    <tr>
                        <th>Election No</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>votes</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM candidate WHERE (candidate_election_no LIKE '%" . $keywordResultCandidate . "%' "
                            . "OR candidate_name LIKE '%" . $keywordResultCandidate . "%' OR candidate_nic LIKE '%" . $keywordResultCandidate . "%') "
                            . "AND candidate_status = '1' ORDER BY candidate_votes DESC";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr class="child-content">
                                <td><?php echo $row["candidate_election_no"]; ?></td>
                                <td><img src="img/<?php echo $row["candidate_picture"]; ?>"/></td>
                                <td><?php echo $row["candidate_name"]; ?></td>
                                <td><?php echo $row["candidate_city"]; ?></td>
                                <td><?php echo $row["candidate_votes"]; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
