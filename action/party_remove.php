<?php
include './db_connection.php';

$no = "";

if (isset($_GET["no"])) {

    $no = $_GET["no"];

    $query = "UPDATE party SET party_status = '0' WHERE party_no = '" . $no . "'";

    $isRemove = mysqli_query($connection, $query);

    if ($isRemove) {
        header("Location: ../admin_panel.php?msgAlertParty=Remove Successful !");
        die();
    } else {
        header("Location: ../admin_panel.php?msgAlertParty=Error,Remove Unsuccessful !");
        die();
    }
} 
    
?>