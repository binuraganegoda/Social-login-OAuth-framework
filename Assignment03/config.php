<?php
//IT16016026 B.A.Ganegoda SSS Socail login with oAuth 2.0

    session_start();
    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("798525245171-m00nbrf6j9gj9pt1ru39l9a1n0ing1fd.apps.googleusercontent.com");
    $gClient->setClientSecret("pAalE9YZ_x69Krqa86SbSIbe");
    $gClient->setApplicationName("SSS Social Login");
    $gClient->setRedirectUri("http://localhost/Google/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>