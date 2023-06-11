<?php
include './db_connection.php';

$nic = "";
$name = "";
$contactNo = "";
$city = "";

if (isset($_POST["nic"]) && isset($_POST["name"]) && isset($_POST["contactNo"]) && isset($_POST["city"])) {

    $nic = $_POST["nic"];
    $name = $_POST["name"];
    $contactNo = $_POST["contactNo"];
    $city = $_POST["city"];

    if ($nic == "") {
        header("Location: ../index.php?msgProfile=Please enter the NIC !");
        die();
    } elseif ($name == "") {
        header("Location: ../index.php?msgProfile=Please enter the name !");
        die();
    }  elseif ($contactNo == "") {
        header("Location: ../index.php?msgProfile=Please enter the contact no !");
        die();
    } elseif ($city == "") {
        header("Location: ../index.php?msgProfile=Please enter the city !");
        die();
    } else {

        $query = "UPDATE voter SET voter_name = '" . $name . "', voter_contact_no = '" . $contactNo . "', "
                . "voter_city = '" . $city . "' WHERE voter_nic = '" . $nic . "'";

        $isSaved = mysqli_query($connection, $query);

        if ($isSaved) {
            header("Location: ../index.php?msgAlertProfile=Update Successful !");
            die();
        } else {
            header("Location: ../index.php?msgAlertProfile=Error,Update Unsuccessful !");
            die();
        }
    }
}
?>