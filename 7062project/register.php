<?php
session_start();
include('dataset/conn.php');
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

    <title>Register Account</title>

</head>

<body>

    <?php include("assets/navbar.php"); ?>


    <h6> Register a New User</h6>
    <br>


    <form method='POST' action='registeruser.php'>
        <label class="label">User Name</label>
        <div class="field">
            <div class="control">
                <input class="input" type="text" name="username" placeholder="User Name">
            </div>
        </div>


        <label class="label">Email</label>
        <div class="field">
            <p class="control">
                <input class="input" type="text" name="email" placeholder="Email">
            </p>
        </div>

        <label class="label">Password</label>
        <div class="field">

            <p class="control">
                <input class="input" type="password" name="password" placeholder="Password">
            </p>
        </div>
        <br>

        <div class="content has-text-centered">
            <div class=" control">
                <input class="button is-large is-success" type="submit" value="REGISTER">
            </div>

            <p>Already got an Account? <a href="login.php">Log In</a></p>
        </div>

    </form>

    <?php include("assets/footer.php"); ?>




</body>