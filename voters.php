<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
    </head>
    <body>
        <div class="child-container-disable" id="voter">
            <form method="get" action="admin_panel.php">
                <input type="text" name="searchVoter" id="searchVoter" value="<?php echo $keywordVoter; ?>" placeholder="Search"/>
                <button>Search</button>
            </form>
            <table>
                <tr>
                    <th>NIC</th>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>City</th>
                </tr>
                <?php
                $query = "SELECT * FROM voter WHERE (voter_nic LIKE '%" . $keywordVoter . "%' OR voter_name LIKE '%" . $keywordVoter . "%' "
                        . "OR voter_contact_no LIKE '%" . $keywordVoter . "%') AND voter_status = '1'";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr class="child-content">
                            <td><?php echo $row["voter_nic"]; ?></td>
                            <td><?php echo $row["voter_name"]; ?></td>
                            <td><?php echo $row["voter_contact_no"]; ?></td>
                            <td><?php echo $row["voter_city"]; ?></td>
                            <td class="remove"><a href="action/voter_remove.php?no=<?php echo $row["voter_nic"]; ?>">&cross;</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </body>
</html>
