<?php

session_start();
$_SESSION['new-email'] = $_GET['new-email'];

include 'profile.php';
