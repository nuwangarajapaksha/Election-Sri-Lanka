<?php
include './db_connection.php';

$nic = "";
$currentPassword = "";
$newPassword = "";
$confirmPassword = "";


if (isset($_POST["nic"]) && isset($_POST["currentPassword"]) && isset($_POST["newPassword"]) && isset($_POST["confirmPassword"])) {

    $nic = $_POST["nic"];
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];


    if ($nic == "") {
        header("Location: ../index.php?msgPassword=Please enter the NIC !");
        die();
    } elseif ($currentPassword == "") {
        header("Location: ../index.php?msgPassword=Please enter the current password !");
        die();
    } elseif ($newPassword == "") {
        header("Location: ../index.php?msgPassword=Please enter the new password !");
        die();
    } elseif ($confirmPassword == "") {
        header("Location: ../index.php?msgPassword=Please enter the confirm password !");
        die();
    } elseif ($confirmPassword != $newPassword) {
        header("Location: ../index.php?msgPassword=Confirm password not match !");
        die();
    } else {

        $queryUser = "SELECT * FROM voter WHERE voter_nic = '" . $nic . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentPasswordDB = $row["voter_password"];

            if ($currentPasswordDB == $currentPassword) {
                $query = "UPDATE voter SET voter_password = '" . $newPassword . "' WHERE voter_nic = '" . $nic . "'";

                $isSaved = mysqli_query($connection, $query);

                if ($isSaved) {
                    header("Location: ../index.php?msgAlertPassword=Update Successful !");
                    die();
                } else {
                    header("Location: ../index.php?msgAlertPassword=Error,Update Unsuccessful !");
                    die();
                }
            } else {
                header("Location: ../index.php?msgPassword=Current password not match !");
                die();
            }
        }
    }
}
?>