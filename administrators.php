<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
    </head>
    <body>
        <div class="child-container-disable" id="admin">
            <button onclick="toggleadminregpopup();">+ &nbsp;Add Administrator</button>
            <form method="get" action="admin_panel.php">
                <input type="text" name="searchAdmin" id="searchAdmin" value="<?php echo $keywordAdmin; ?>" placeholder="Search"/>
                <button>Search</button>
            </form>
            <table>
                <tr>
                    <th>Admin No</th>
                    <th>Name</th>
                    <th>NIC</th>
                    <th>Contact No</th>
                    <th>City</th>
                    <th>Username</th>
                </tr>
                <?php
                $query = "SELECT * FROM admin WHERE (admin_no LIKE '%" . $keywordAdmin . "%' OR admin_name LIKE '%" . $keywordAdmin . "%' "
                        . "OR admin_nic LIKE '%" . $keywordAdmin . "%' OR admin_contact_no LIKE '%" . $keywordAdmin . "%' OR admin_username LIKE '%" . $keywordAdmin . "%') AND admin_status = '1'";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr class="child-content">
                            <td><?php echo $row["admin_no"]; ?></td>
                            <td><?php echo $row["admin_name"]; ?></td>
                            <td><?php echo $row["admin_nic"]; ?></td>
                            <td><?php echo $row["admin_contact_no"]; ?></td>
                            <td><?php echo $row["admin_city"]; ?></td>
                            <td><?php echo $row["admin_username"]; ?></td>
                            <td class="remove"><a href="action/admin_remove.php?no=<?php echo $row["admin_no"]; ?>">&cross;</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <?php include './admin_registration.php'; ?>
    </body>
</html>
