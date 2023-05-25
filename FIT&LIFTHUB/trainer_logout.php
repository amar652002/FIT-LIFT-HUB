<?php
session_start();
session_destroy();
header("Location: trainer_login.php");
exit;
?>