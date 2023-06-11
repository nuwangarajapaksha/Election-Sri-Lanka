<!DOCTYPE html>
<?php
session_start();
include './action/db_connection.php';
$activeNo = "";
$activeName = "";
$activeNic = "";
$activeContactNo = "";
$activeCity = "";
$activeUsername = "Account";
if (isset($_SESSION["admin_is_login"]) && isset($_SESSION["activeAdminNo"]) && $_SESSION["admin_is_login"] == true) {
    $activeAdminNo = $_SESSION["activeAdminNo"];
    $query = "SELECT * FROM admin WHERE admin_no = '" . $activeAdminNo . "'";
    $result = $connection->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $activeNo = $row["admin_no"];
        $activeName = $row["admin_name"];
        $activeNic = $row["admin_nic"];
        $activeContactNo = $row["admin_contact_no"];
        $activeCity = $row["admin_city"];
        $activeUsername = $row["admin_username"];
    }
} else {
    header("Location: index.php?msgAdmin=Login First !");
    die();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/admin_panel_headerfooter_style.css"/>
    </head>
    <body>
        <header>
            <nav>
                <div class="header-container">
                    <p><a href="admin_panel.php">ELECTION<span>Sri Lanka</span></a></p>
                    <ul>
                        <li class="account"><?php echo $activeUsername; ?>&nbsp;/Admin
                            <ul class="account-content">
                                <li onclick="toggleadminprofilepopup();">Profile</li>
                                <a href="action/admin_logout.php"><li>Logout</li></a>    
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <?php include './admin_profile.php'; ?>
    </body>
</html>
