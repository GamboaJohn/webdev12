<?php
session_start();
session_destroy();
unset($_SESSION['status']);
Header("Location: ../index.php");
?>