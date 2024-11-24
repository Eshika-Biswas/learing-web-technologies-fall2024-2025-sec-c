<?php
session_start();


session_destroy();


header('Location: logincheak.php');
exit();
?>