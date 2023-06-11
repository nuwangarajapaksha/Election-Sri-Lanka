<?php
include './db_connection.php';

$no = "";
$name = "";
$nic = "";
$contactNo = "";
$city = "";
$username = "";
$password = "";
$confirmPassword = "";
if (isset($_POST["no"]) && isset($_POST["name"]) && isset($_POST["nic"]) && isset($_POST["contactNo"]) && isset($_POST["city"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"])) {

    $no = $_POST["no"];
    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $contactNo = $_POST["contactNo"];
    $city = $_POST["city"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($no == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the admin no !");
        die();
    } elseif ($name == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the name !");
        die();
    } elseif ($nic == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the NIC !");
        die();
    } elseif ($contactNo == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the contact no !");
        die();
    } elseif ($city == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the city !");
        die();
    } elseif ($username == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the username !");
        die();
    } elseif ($password == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the password !");
        die();
    } elseif ($confirmPassword == "") {
        header("Location: ../admin_panel.php?msgAdmin=Please enter the confirm password !");
        die();
    } elseif ($confirmPassword != $password) {
        header("Location: ../admin_panel.php?msgAdmin=Confirm password not match !");
        die();
    } else {
        $queryUser = "SELECT * FROM admin WHERE admin_no = '" . $no . "' OR admin_nic = '" . $nic . "' OR admin_username = '" . $username . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            header("Location: ../admin_panel.php?msgAdmin=Already registered !");
            die();
        } else {
            $query = "INSERT INTO admin (admin_no, admin_name, admin_nic, admin_contact_no, admin_city, admin_username, admin_password, admin_status) "
                    . "VALUES ('" . $no . "','" . $name . "','" . $nic . "','" . $contactNo . "','" . $city . "','" . $username . "','" . $password . "','1')";

            $isSaved = mysqli_query($connection, $query);

            if ($isSaved) {
                header("Location: ../admin_panel.php?msgAlertAdmin=Register Successful !");
                die();
            } else {
                header("Location: ../admin_panel.php?msgAlertAdmin=Error,Register Unsuccessful !");
                die();
            }
        }
    }
}
?>