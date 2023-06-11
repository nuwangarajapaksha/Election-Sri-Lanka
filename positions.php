<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_style.css"/>
    </head>
    <body>
        <div class="child-container-disable" id="position">
            <button onclick="togglepositionregpopup();">+ &nbsp;Add Position</button>
            <form method="get" action="admin_panel.php">
                <input type="text" name="searchPosition" id="searchPosition" value="<?php echo $keywordPosition; ?>" placeholder="Search"/>
                <button>Search</button>
            </form>
            <table>
                <tr>
                    <th>Position No</th>
                    <th>Position</th>
                    <th>Description</th>
                </tr>
                <?php
                $query = "SELECT * FROM position WHERE (position_no LIKE '%" . $keywordPosition . "%' OR position_name LIKE '%" . $keywordPosition . "%') AND position_status = '1'";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr class="child-content">
                            <td><?php echo $row["position_no"]; ?></td>
                            <td><?php echo $row["position_name"]; ?></td>
                            <td><?php echo $row["position_description"]; ?></td>
                            <td class="remove"><a href="action/position_remove.php?no=<?php echo $row["position_no"]; ?>">&cross;</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <?php include './position_registration.php'; ?>
    </body>
</html>
