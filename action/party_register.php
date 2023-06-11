<?php
include './db_connection.php';

$no = "";
$mark = "";
$name = "";
$shortForm = "";
if (isset($_POST["no"]) && isset($_FILES["mark"]["name"]) && isset($_POST["name"]) && isset($_POST["shortForm"])) {

    $no = $_POST["no"];
    $name = $_POST["name"];
    $shortForm = $_POST["shortForm"];

    if ($no == "") {
        header("Location: ../admin_panel.php?msgParty=Please enter the party no !");
        die();
    } elseif ($_FILES["mark"]["name"] == "") {
        header("Location: ../admin_panel.php?msgParty=Please upload the mark !");
        die();
    } elseif ($name == "") {
        header("Location: ../admin_panel.php?msgParty=Please enter the name !");
        die();
    } elseif ($shortForm == "") {
        header("Location: ../admin_panel.php?msgParty=Please enter the Short Form !");
        die();
    } else {
        $queryUser = "SELECT * FROM party WHERE party_no = '" . $no . "' OR party_name = '" . $name . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            header("Location: ../admin_panel.php?msgParty=Already registered !");
            die();
        } else {

            $target_dir = "../img/";
            $target_file = $target_dir . basename($_FILES["mark"]["name"]);
            $productFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if ($productFileType != "jpg" && $productFileType != "png" && $productFileType != "jpeg") {
                header("Location: ../admin_panel.php?msgParty=Sorry, only JPG, JPEG, PNG files are allowed ");
                die();
            } else {
                move_uploaded_file($_FILES["mark"]["tmp_name"], $target_file);

                $query = "INSERT INTO party (party_no, party_mark, party_name, party_name_short_form, party_votes, party_status) "
                        . "VALUES ('" . $no . "','" . $_FILES["mark"]["name"] . "','" . $name . "','" . $shortForm . "','0','1')";

                $isSaved = mysqli_query($connection, $query);

                if ($isSaved) {
                    header("Location: ../admin_panel.php?msgAlertParty=Register Successful !");
                    die();
                } else {
                    header("Location: ../admin_panel.php?msgAlertParty=Error,Register Unsuccessful !");
                    die();
                }
            }
        }
    }
}
?>