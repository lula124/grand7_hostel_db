<?php
session_start();
session_unset();
session_destroy();
header("Location: /grand7_hostel/public/index.php");
exit();
?>
