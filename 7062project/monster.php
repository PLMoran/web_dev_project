<?php
session_start();

if (isset($_GET['monster'])) {
    $id = $_GET['monster'];

    $endpoint = "http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/getapi.php?monster=$id";

    $result = file_get_contents($endpoint);
    $monster = json_decode($result, true);
}

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

    <title>Monster</title>
</head>

<body>

    <?php include("assets/navbar.php"); ?>
    <!-- end of navbar-end -->

    <?php
    foreach ($monster as $row) {
        echo "
        <div class='card monster-card'>
            
                <header class='card-header'>
                    <p class='card-header-title'>
                        {$row['names']}
                    </p>
                </header>

            <div class='card-content'>                          
                <img class='monster-card-img' src='{$row['imgpath']}'>
            </div> 
            <footer class='card-footer'>  
                    <p class='card-footer-item'>
                        <span>Armour Class: {$row['ac']}</span>
                    </p>
        
                    <p class='card-footer-item'>
                        <span>Health Points: {$row['hp']}</span>
                    </p>

                    <p class='card-footer-item'>
                        <span>Challenge Rating: {$row['cr']}</span>
                    </p>
                </footer>

                <footer class='card-footer'>
                    <p class='card-footer-item'>
                        <span>Str: {$row['strength']}</span>
                    </p>

                    <p class='card-footer-item'>
                        <span>Int: {$row['inteligence']}</span>
                    </p>
                </footer>

                <footer class='card-footer'>
                    <p class='card-footer-item'>
                        <span>Con: {$row['constitution']}</span>
                    </p>

                    <p class='card-footer-item'>
                        <span>Wis: {$row['wisdom']}</span>
                    </p>
                </footer> 

                <footer class='card-footer'>  
                    <p class='card-footer-item'>
                        <span>Dex: {$row['dexterity']}</span>
                    </p>
        
                    <p class='card-footer-item'>
                        <span>Cha: {$row['charisma']}</span>
                    </p>
                </footer>

                <div class='card-content'>   
                <p>Size: {$row['size']}</p>
                <p>Type: {$row['type']}</p>              
                <p>Movement: {$row['movement']}</p>
                <p>Alignment: {$row['alignment']}</p>
                <p>Status: {$row['status']}</p>
                <p>Source: {$row['source']}</p>
            </div> 

            
        </div>
   
    <br>

    <div class='columns'>
        <div class='column has-text-centered'>
            <a href='encounterbuilder.php?id={$row['id']}' class='button is-large is-success' id='add-monster'>
                <strong>Add to Encounter</strong>
            </a>
        </div>
    </div>";
    }
    ?>

    <!--Footer -->
    <?php include('assets/footer.php'); ?>

</body>

</html>