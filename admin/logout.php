<?php
echo "test";
session_start();
session_unset();
session_destroy();
header("location: login.php");
?>