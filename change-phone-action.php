<?php

session_start();
$_SESSION['new-phone'] = $_GET['new-phone'];

include 'profile.php';
