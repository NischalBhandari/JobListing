<?php include_once 'config/init.php'; ?>
<?php
$_SESSION = array();
session_destroy();
header("location: login.php");
exit;
?>