<?php
include './db_connection.php';

$no = "";

if (isset($_GET["no"])) {

    $no = $_GET["no"];

    $query = "UPDATE candidate SET candidate_status = '0' WHERE candidate_election_no = '" . $no . "'";

    $isRemove = mysqli_query($connection, $query);

    if ($isRemove) {
        header("Location: ../admin_panel.php?msgAlertCandidate=Remove Successful !");
        die();
    } else {
        header("Location: ../admin_panel.php?msgAlertCandidate=Error,Remove Unsuccessful !");
        die();
    }
} 
    
?>