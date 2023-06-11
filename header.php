<!DOCTYPE html>
<?php
session_start();
include './action/db_connection.php';
$activeNic = "Login";
$activeName = "";
$activeContactNo = "";
$activeCity = "";
if (isset($_SESSION["voter_is_login"]) && isset($_SESSION["activeVoterNic"]) && $_SESSION["voter_is_login"] == true) {
    $activeVoterNic = $_SESSION["activeVoterNic"];
    $query = "SELECT * FROM voter WHERE voter_nic = '" . $activeVoterNic . "'";
    $result = $connection->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $activeNic = $row["voter_nic"];
        $activeName = $row["voter_name"];
        $activeContactNo = $row["voter_contact_no"];
        $activeCity = $row["voter_city"];
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/headerfooter_style.css"/>
    </head>
    <body>
        <header>
            <nav>
                <div class="header-container">
                    <p><a href="index.php">ELECTION <span>Sri Lanka</span></a></p>
                    <ul>
                        <li><a href="vote.php">Vote</a></li>
                        <li><a href="guide.php">Guide</a></li>
                        <li><a href="about.php">About</a></li>
                        <span>
                            <?php
                            if (isset($_SESSION["voter_is_login"])) {
                                if ($_SESSION["voter_is_login"] == true) {
                                    ?>
                                    <li class="account"><?php echo $activeNic; ?>&nbsp;/Voter
                                        <ul class="account-content">
                                            <li onclick="togglevoterprofilepopup();">Profile</li>
                                            <a href="action/voter_logout.php"><li>Logout</li></a>    
                                        </ul>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li onclick="togglevoterregpopup();">Register</li>
                                    <li class="account" onclick="togglevoterloginpopup();"><?php echo $activeNic; ?></li>
                                    <?php
                                }
                            } else {
                                ?>
                                <li onclick="togglevoterregpopup();">Register</li>
                                <li class="account" onclick="togglevoterloginpopup();"><?php echo $activeNic; ?></li>
                                    <?php
                                }
                                ?>


                        </span>
                    </ul>
                </div>
            </nav>
        </header>
        <?php
        include './voter_registration.php';
        include './voter_login.php';
        include './voter_profile.php';
        ?>

    </body>
</html>
