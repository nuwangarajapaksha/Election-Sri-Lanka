<?php
include './db_connection.php';

$no = "";
$currentPassword = "";
$newPassword = "";
$confirmPassword = "";


if (isset($_POST["no"]) && isset($_POST["currentPassword"]) && isset($_POST["newPassword"]) && isset($_POST["confirmPassword"])) {

    $no = $_POST["no"];
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];


    if ($no == "") {
        header("Location: ../admin_panel.php?msgPassword=Please enter the admin no !");
        die();
    } elseif ($currentPassword == "") {
        header("Location: ../admin_panel.php?msgPassword=Please enter the current password !");
        die();
    } elseif ($newPassword == "") {
        header("Location: ../admin_panel.php?msgPassword=Please enter the new password !");
        die();
    } elseif ($confirmPassword == "") {
        header("Location: ../admin_panel.php?msgPassword=Please enter the confirm password !");
        die();
    } elseif ($confirmPassword != $newPassword) {
        header("Location: ../admin_panel.php?msgPassword=Confirm password not match !");
        die();
    } else {

        $queryUser = "SELECT * FROM admin WHERE admin_no = '" . $no . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentPasswordDB = $row["admin_password"];

            if ($currentPasswordDB == $currentPassword) {
                $query = "UPDATE admin SET admin_password = '" . $newPassword . "' WHERE admin_no = '" . $no . "'";

                $isSaved = mysqli_query($connection, $query);

                if ($isSaved) {
                    header("Location: ../admin_panel.php?msgAlertPassword=Update Successful !");
                    die();
                } else {
                    header("Location: ../admin_panel.php?msgAlertPassword=Error,Update Unsuccessful !");
                    die();
                }
            } else {
                header("Location: ../admin_panel.php?msgPassword=Current password not match !");
                die();
            }
        }
    }
}
?>