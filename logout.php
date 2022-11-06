<?php
session_start();
session_destroy();
header("location: index.php");  //for redirecting the user to the home page
?>