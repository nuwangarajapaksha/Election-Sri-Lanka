<?php
include './db_connection.php';

$no = "";

if (isset($_GET["no"])) {

    $no = $_GET["no"];

    $query = "UPDATE admin SET admin_status = '0' WHERE admin_no = '" . $no . "'";

    $isRemove = mysqli_query($connection, $query);

    if ($isRemove) {
        header("Location: ../admin_panel.php?msgAlertAdmin=Remove Successful !");
        die();
    } else {
        header("Location: ../admin_panel.php?msgAlertAdmin=Error,Remove Unsuccessful !");
        die();
    }
} 
    
?>