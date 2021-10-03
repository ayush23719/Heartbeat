<?php
session_start();
session_destroy();
header("location:home.htm?msg=Successfully Logged out");
?>