<?php
session_start();
$_SESSION["voter_is_login"] = false;
header("Location: ../index.php");
session_destroy();
?>