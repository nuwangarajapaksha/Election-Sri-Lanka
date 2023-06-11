<?php
include './db_connection.php';

$nic = "";
$name = "";
$contactNo = "";
$city = "";
$password = "";
$confirmPassword = "";
if (isset($_POST["nic"]) && isset($_POST["name"]) && isset($_POST["contactNo"]) && isset($_POST["city"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"])) {

    $nic = $_POST["nic"];
    $name = $_POST["name"];
    $contactNo = $_POST["contactNo"];
    $city = $_POST["city"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($nic == "") {
        header("Location: ../index.php?msgVoterReg=Please enter the NIC !");
        die();
    }  elseif ($name == "") {
        header("Location: ../index.php?msgVoterReg=Please enter the name !");
        die();
    } elseif ($contactNo == "") {
        header("Location: ../index.php?msgVoterReg=Please enter the contact no !");
        die();
    } elseif ($city == "") {
        header("Location: ../index.php?msgVoterReg=Please enter the city !");
        die();
    } elseif ($password == "") {
        header("Location: ../index.php?msgVoterReg=Please enter the password !");
        die();
    } elseif ($confirmPassword == "") {
        header("Location: ../index.php?msgVoterReg=Please enter the confirm password !");
        die();
    } elseif ($confirmPassword != $password) {
        header("Location: ../index.php?msgVoterReg=Confirm password not match !");
        die();
    } else {
        $queryUser = "SELECT * FROM voter WHERE voter_nic = '" . $nic . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            header("Location: ../index.php?msgVoterReg=Already registered !");
            die();
        } else {
            $query = "INSERT INTO voter (voter_nic, voter_name, voter_contact_no, voter_city, voter_password, voter_status) "
                    . "VALUES ('" . $nic . "','" . $name . "','" . $contactNo . "','" . $city . "','" . $password . "','1')";

            $isSaved = mysqli_query($connection, $query);

            if ($isSaved) {
                header("Location: ../index.php?msgAlertVoterReg=Register Successful !");
                die();
            } else {
                header("Location: ../index.php?msgAlertVoterReg=Error,Register Unsuccessful !");
                die();
            }
        }
    }
}
?>