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


    <title>DanD Mainpage</title>


</head>

<body>
    <?php include("assets/navbar.php"); ?>

    <!-- end of navbar -->

    <div class="columns title-card">
        <div>
            <h6 class="title is-1 strap">Game Master's </h6>
            <h6 class="title is-1 strap">Monster Manual</h6>
            <h6 class="title is-1 strap">and Encounter Builder</h6>

        </div>
    </div>

    <div class="columns is-gapless main-selection">
        <div class="column is-half center-cropped">
            <a href="monstermanual.php">
                <img class="selection-img" src="https://i.imgur.com/yU2uA3E.png" alt="">

            </a>
        </div>
        <div class="column is-half center-cropped">
            <a href="encounterbuilder.php">
                <img class="selection-img" src="https://i.imgur.com/Tuj5hT0.png" alt="">
            </a>
        </div>
    </div>


    <!-- footer-->

    <?php include("assets/footer.php"); ?>
</body>

</html>