<?php
session_start();
session_destroy();
header("url=login.php");
?>