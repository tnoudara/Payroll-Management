<?php

session_start();
$_SESSION['new-pswd'] = password_hash($_GET['new-pswd'], PASSWORD_DEFAULT);


include 'profile.php';
