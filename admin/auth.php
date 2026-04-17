<?php
session_start();


$timeout = 3000;

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

?>
