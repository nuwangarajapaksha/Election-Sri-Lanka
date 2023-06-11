<?php
session_start();
include './db_connection.php';

$nic = "";
$password = "";

if (isset($_SESSION["voter_is_login"])) {//check is login already setted(already logedin)
    if ($_SESSION["voter_is_login"] == true) {//logged in
        header("Location: ../index.php");
        die();
    }
} else {
    if (isset($_POST["nic"]) && isset($_POST["password"])) {
        $nic = $_POST["nic"];
        $password = $_POST["password"];

        if ($nic == "") {
            header("Location: ../index.php?msgVoter=Please enter the username !");
            die();
        } elseif ($password == "") {
            header("Location: ../index.php?msgVoter=Please enter the password !");
            die();
        } else {
            $query = "SELECT * FROM voter WHERE voter_nic = '" . $nic . "' ";
            $result = $connection->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nicDB = $row["voter_nic"];
                $passwordDB = $row["voter_password"];
                $statusDB = $row["voter_status"];
                if ($nic == $nicDB && $password == $passwordDB && $statusDB == 1) {
                    $_SESSION["voter_is_login"] = true; //assign true into is_login
                    $_SESSION["activeVoterNic"] = $row["voter_nic"];
                    header("Location: ../index.php");
                    die();
                    exit();
                } else {
                    header("Location: ../index.php?msgVoter=Error,incorrect password !");
                    die();
                }
            } else {
                header("Location: ../index.php?msgVoter=Error,invalid username !");
                die();
            }
        }
    }
}
?>