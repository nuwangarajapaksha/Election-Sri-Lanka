<?php
include './db_connection.php';

$no = "";

if (isset($_GET["no"])) {

    $no = $_GET["no"];

    $query = "UPDATE voter SET voter_status = '0' WHERE voter_nic = '" . $no . "'";

    $isRemove = mysqli_query($connection, $query);

    if ($isRemove) {
        header("Location: ../admin_panel.php?msgAlertVoter=Remove Successful !");
        die();
    } else {
        header("Location: ../admin_panel.php?msgAlertVoter=Error,Remove Unsuccessful !");
        die();
    }
} 
    
?>