<?php
include("connect.php");
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to index.html
header('Location: index.php');
exit();
?>