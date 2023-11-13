<?php
session_start();

session_unset();
session_destroy();


header("location: /loginf/login.php");
exit;

?>