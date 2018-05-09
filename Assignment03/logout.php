<?php
//IT16016026 B.A.Ganegoda SSS Socail login with oAuth 2.0

require_once "config.php";
unset($_SESSION['access_token']);
$gClient->revokeToken();
session_destroy();
header('login.php');

?>