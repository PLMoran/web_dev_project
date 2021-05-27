<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/scripting.js"></script>

    <title>Log In </title>

</head>

<body>
    <?php include("assets/navbar.php"); ?>

    <!-- end of navbar-end -->

    <h6> Log In</h6>
    <br>


    <?php
    if (isset($_POST['username']) && ($_POST['password'])) {
    }
    ?>

    <?php
    if (!isset($_SESSION['loggedin'])) {
        echo "

    <form method='POST' action='loginuser.php'>
        <label class='label'>Username</label>
        <div class='field'>
            <div class='control'>
                <input class='input' type='text' name='username' placeholder='User Name'>
            </div>
        </div>

        <label class='label'>Password</label>
        <div class='field'>

            <div class='control'>
                <input class='input' type='password' name='password' placeholder='Password'>
            </div>
        </div>
        <br>

        <div class='content has-text-centered'>
            <div class='control'>
                <input class='button is-large is-success' type='submit' value='LOG IN'>
            </div>

            <p>Not got an Account yet? <a href='register.php'>Register</a></p>
        </div>

    </form> ";
    } else {
        echo " <a class='button is-large is-success' id='log-in' href = 'logout.php'>
            <strong>Log Out</strong>
        </a>";
    }

    ?>


    <!--Footer -->
    <?php include('assets/footer.php'); ?>

</body>

</html>