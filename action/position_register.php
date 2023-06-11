<?php
include './db_connection.php';

$no = "";
$position = "";
$description = "";
if (isset($_POST["no"]) && isset($_POST["position"]) && isset($_POST["description"])) {

    $no = $_POST["no"];
    $position = $_POST["position"];
    $description = $_POST["description"];


    $data = array($no, $position, $description);

    if ($no == "") {
        header("Location: ../admin_panel.php?msgPosition=Please enter the position no !");
        die();
    } elseif ($position == "") {
        header("Location: ../admin_panel.php?msgPosition=Please enter the position !");
        die();
    } elseif ($description == "") {
        header("Location: ../admin_panel.php?msgPosition=Please enter the description !");
        die();
    } else {
        $queryUser = "SELECT * FROM position WHERE position_no = '" . $no . "' OR position_name = '" . $position . "'";
        $result = $connection->query($queryUser);
        if ($result->num_rows > 0) {
            header("Location: ../admin_panel.php?msgPosition=Already registered !");
            die();
        } else {
            $query = "INSERT INTO position (position_no, position_name, position_description, position_status) "
                    . "VALUES ('" . $no . "','" . $position . "','" . $description . "','1')";

            $isSaved = mysqli_query($connection, $query);

            if ($isSaved) {
                header("Location: ../admin_panel.php?msgAlertPosition=Register Successful !");
                unset($data);
                die();
            } else {
                header("Location: ../admin_panel.php?msgAlertPosition=Error,Register Unsuccessful !");
                die();
            }
        }
    }
}
?>