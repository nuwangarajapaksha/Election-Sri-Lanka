<?php
include './db_connection.php';

$no = "";
$party = "";
$picture = "";
$name = "";
$nic = "";
$city = "";

if (isset($_POST["no"]) && isset($_POST["party"]) && isset($_FILES["picture"]["name"]) && isset($_POST["name"]) && isset($_POST["nic"]) && isset($_POST["city"])) {

    $no = $_POST["no"];
    $party = $_POST["party"];
    $picture = $_FILES["picture"]["name"];
    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $city = $_POST["city"];

    if ($no == "") {
        header("Location: ../admin_panel.php?msgCandidate=Please enter the election no !");
        die();
    } elseif ($party == "") {
        header("Location: ../admin_panel.php?msgCandidate=Please enter the party !");
        die();
    } elseif ($_FILES["picture"]["name"] == "") {
        header("Location: ../admin_panel.php?msgCandidate=Please enter the picture !");
        die();
    } elseif ($name == "") {
        header("Location: ../admin_panel.php?msgCandidate=Please enter the name !");
        die();
    } elseif ($nic == "") {
        header("Location: ../admin_panel.php?msgCandidate=Please enter the NIC !");
        die();
    } elseif ($city == "") {
        header("Location: ../admin_panel.php?msgCandidate=Please enter the city !");
        die();
    } else {
        $queryUser = "SELECT * FROM candidate WHERE candidate_election_no = '" . $no . "' OR candidate_nic = '" . $nic . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            header("Location: ../admin_panel.php?msgCandidate=Already registered !");
            die();
        } else {

            $target_dir = "../img/";
            $target_file = $target_dir . basename($_FILES["picture"]["name"]);
            $productFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if ($productFileType != "jpg" && $productFileType != "png" && $productFileType != "jpeg") {
                header("Location: ../admin_panel.php?msgCandidate=Sorry, only JPG, JPEG, PNG files are allowed ");
                die();
            } else {
                move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);

                $query = "INSERT INTO candidate (candidate_election_no, candidate_picture, candidate_name, candidate_nic, candidate_city, candidate_votes, candidate_status, party_no) "
                        . "VALUES ('" . $no . "','" . $_FILES["picture"]["name"] . "','" . $name . "','" . $nic . "','" . $city . "','0','1','" . $party . "')";

                $isSaved = mysqli_query($connection, $query);

                if ($isSaved) {
                    header("Location: ../admin_panel.php?msgAlertCandidate=Register Successful !");
                    die();
                } else {
                    header("Location: ../admin_panel.php?msgAlertCandidate=Error,Register Unsuccessful !");
                    die();
                }
            }
        }
    }
}
?>