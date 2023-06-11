<?php
include './db_connection.php';

$no = "";

if (isset($_GET["no"])) {

    $no = $_GET["no"];

    $query = "UPDATE position SET position_status = '0' WHERE position_no = '" . $no . "'";

    $isRemove = mysqli_query($connection, $query);

    if ($isRemove) {
        header("Location: ../admin_panel.php?msgAlertPosition=Remove Successful !");
        die();
    } else {
        header("Location: ../admin_panel.php?msgAlertPosition=Error,Remove Unsuccessful !");
        die();
    }
} 

?>