<?php
session_start();
unset($_SESSION['sess_Name']);
unset($_SESSION['sess_Phone']);
session_destroy();
header("location:signup/index.php");
