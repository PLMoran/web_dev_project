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
    <link rel="stylesheet" href="../stylesheets/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/scripting.js"></script>

    <title>Delete Monster</title>
</head>

<body>
    <?php include("../assets/adminnav.php"); ?>

    <h6 class="title is-one strap"> Delete Monster</h6>

    <?php
    foreach ($monster as $row) {
        echo "

    <form action='http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/deleteapi.php' method='post'>

        <div class='card'>
            
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

            <footer class='card-footer'>  
                <p class='card-footer-item'> Size: {$row['size']}</p>
                <p class='card-footer-item'>Movement: {$row['movement']}</p>
            </footer>

            <footer class='card-footer'>
                <p class='card-footer-item'>Type: {$row['type']}</p>              
                <p class='card-footer-item'>Alignment: {$row['alignment']}</p>
                <p class='card-footer-item'>Status: {$row['status']}</p>
            </footer>

            <footer class='card-footer'>
                <p class='card-footer-item'>Source Book: {$row['source']}</p>
            </footer>

        </div>

        <div class='select is-hidden'>
            <select name='sentid' value='{$row['id']}'>
                <option>{$row['id']}</option>
            </select>
        </div>
    


        <br>

        <div class='content has-text-centered'>
            <div class=' control'>
                <input class='button is-large is-success' type='submit' name='delete' value='Delete Monster'>
            </div>
        </div>
    </form>";
    }
    ?>

</body>

</html>