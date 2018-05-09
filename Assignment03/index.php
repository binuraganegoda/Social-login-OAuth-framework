<?php
//IT16016026 B.A.Ganegoda SSS Socail login with oAuth 2.0
session_start();

    if(!isset($_SESSION['access_token']))
    {
        header('Location: login.php');
        exit();

    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with Google - IT16016026</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
    <div class="""row justify content center">
    <div class="col-md-3" align="center">
            <img style="width: 80% " src="<?php echo $_SESSION['picture']?>">
        </div>
    <div class="col-md-9" align="center">
            <table class="table table-hover table-bordered">

                <tbody>

                   <!-- <tr>
                        <td><ID></td>
                        <td></td>
                    </tr> -->
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $_SESSION['givenName']?></td>

                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $_SESSION['familyname']?></td>

                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['email']?></td>

                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['gender']?></td>

                    </tr>


                </tbody>

    </div>

    </div>
</body>
</html>