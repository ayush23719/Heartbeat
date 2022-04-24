<?php
session_start();
session_destroy();
header("location:../../../../index.html?msg=Successfully Logged out");
?>