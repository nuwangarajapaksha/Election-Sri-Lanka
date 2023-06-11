<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
    </head>
    <body>
        <div class="child-container-disable" id="candidate">
            <button onclick="togglecandidateregpopup();">+ &nbsp;Add Candidate</button>
            <form method="get" action="admin_panel.php">
                <input type="text" name="searchCandidate" id="searchCandidate" value="<?php echo $keywordCandidate; ?>" placeholder="Search"/>
                <button>Search</button>
            </form>
            <table>
                <tr>
                    <th>Election No</th>
                    <th>Mark</th>
                    <th>Party</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>NIC</th> 
                    <th>City</th>
                    <th>Votes</th>
                </tr>
                <?php
                $query = "SELECT * FROM candidate INNER JOIN party ON candidate.party_no = party.party_no  WHERE (candidate_election_no LIKE '%" . $keywordCandidate . "%' "
                        . "OR candidate_name LIKE '%" . $keywordCandidate . "%' OR candidate_nic LIKE '%" . $keywordCandidate . "%' "
                        . "OR candidate.party_no LIKE '%" . $keywordCandidate . "%' OR party_name LIKE '%" . $keywordCandidate . "%' "
                        . "OR party_name_short_form LIKE '%" . $keywordCandidate . "%') AND candidate_status = '1'";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr class="child-content">
                            <td><?php echo $row["candidate_election_no"]; ?></td>
                            <td><img src="img/<?php echo $row["party_mark"]; ?>"/></td>
                            <td><?php echo $row["party_name"]; ?></td>
                            <td><img src="img/<?php echo $row["candidate_picture"]; ?>"/></td>
                            <td><?php echo $row["candidate_name"]; ?></td>
                            <td><?php echo $row["candidate_nic"]; ?></td>
                            <td><?php echo $row["candidate_city"]; ?></td>
                            <td><?php echo $row["candidate_votes"]; ?></td>
                            <td class="remove"><a href="action/candidate_remove.php?no=<?php echo $row["candidate_election_no"]; ?>">&cross;</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <?php include './candidate_registration.php';
        ?>
    </body>
</html>
