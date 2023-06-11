<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
    </head>
    <body>
        <div class="child-container-disable" id="party">
            <button onclick="togglepartyregpopup();">+ &nbsp;Add Party</button>
            <form method="get" action="admin_panel.php">
                <input type="text" name="searchParty" id="searchParty" value="<?php echo $keywordParty; ?>" placeholder="Search"/>
                <button>Search</button>
            </form>
            <table>
                <tr>
                    <th>Party No</th>
                    <th>Mark</th>
                    <th>Name</th>
                    <th>Short Form</th>
                    <th>Votes</th>
                </tr>
                <?php
                $query = "SELECT * FROM party WHERE (party_no LIKE '%" . $keywordParty . "%' OR party_name LIKE '%" . $keywordParty . "%' "
                        . "OR party_name_short_form LIKE '%" . $keywordParty . "%') AND party_status = '1'";
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
                            <td class="remove"><a href="action/party_remove.php?no=<?php echo $row["party_no"]; ?>">&cross;</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <?php include './party_registration.php'; ?>
    </body>
</html>
