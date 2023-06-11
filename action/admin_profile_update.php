<?php
include './db_connection.php';

$no = "";
$name = "";
$nic = "";
$contactNo = "";
$city = "";
$username = "";

if (isset($_POST["no"]) && isset($_POST["name"]) && isset($_POST["nic"]) && isset($_POST["contactNo"]) && isset($_POST["city"]) && isset($_POST["username"])) {

    $no = $_POST["no"];
    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $contactNo = $_POST["contactNo"];
    $city = $_POST["city"];
    $username = $_POST["username"];

    if ($no == "") {
        header("Location: ../admin_panel.php?msgProfile=Please enter the admin no !");
        die();
    } elseif ($name == "") {
        header("Location: ../admin_panel.php?msgProfile=Please enter the name !");
        die();
    } elseif ($nic == "") {
        header("Location: ../admin_panel.php?msgProfile=Please enter the NIC !");
        die();
    } elseif ($contactNo == "") {
        header("Location: ../admin_panel.php?msgProfile=Please enter the contact no !");
        die();
    } elseif ($city == "") {
        header("Location: ../admin_panel.php?msgProfile=Please enter the city !");
        die();
    } elseif ($username == "") {
        header("Location: ../admin_panel.php?msgProfile=Please enter the username !");
        die();
    } else {

        $query = "UPDATE admin SET admin_name = '" . $name . "', admin_nic = '" . $nic . "', admin_contact_no = '" . $contactNo . "', "
                . "admin_city = '" . $city . "', admin_username = '" . $username . "' WHERE admin_no = '" . $no . "'";

        $isSaved = mysqli_query($connection, $query);

        if ($isSaved) {
            header("Location: ../admin_panel.php?msgAlertProfile=Update Successful !");
            die();
        } else {
            header("Location: ../admin_panel.php?msgAlertProfile=Error,Update Unsuccessful !");
            die();
        }
    }
}
?>