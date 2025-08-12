<?php
session_start();
session_destroy();
header("Location: /EspressoEase/pages/admin/login.php");
?>
