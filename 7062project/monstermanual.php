<?php
session_start();

$endpoint = "http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/getapi.php?allmonsters";

$dataset = file_get_contents($endpoint);

$monsters = json_decode($dataset, true);

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

    <title>Monster Manual </title>

</head>

<body>
    <?php include("assets/navbar.php"); ?>

    <!-- end of navbar-end -->

    <div>
        <h6 class="title is-1 strap">MONSTER MANUAL</H6>
    </div>


    <div class="columns is-mobile mm-padding">
        <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
            <label class='label'>
                <button class='button is-small' id='table-view'>
                    Table View
                </button>
                <button class='button is-small' id='card-view'>
                    Card View
                </button>
            </label>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#monsterTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <!--SEARCH BAR  -->
    <div class="columns is-mobile mm-padding">
        <div class="column is-half">
            <div class="box">
                <div class="field">
                    <label class="label">Search</label>

                    <input class="input" id="myInput" placeholder="Search...">

                </div>
            </div>
        </div>
    </div>

    <!-- TABLE OF MONSTERS -->
    <div class="columns monster-table mm-padding" id="view-monster-table">
        <div class="column is-full">
            <div class="table-container">

                <table class="table is-striped monster-table">

                    <thead>
                        <tr>
                            <th><abbr title="Name">Name</abbr></th>
                            <th><abbr title="Challenge Rating">CR</abbr></th>
                            <th><abbr title="Type">Type</abbr></th>
                            <th><abbr title="Size">Size</abbr></th>
                            <th><abbr title="Armour Class">AC</abbr></th>
                            <th><abbr title="Hit Points">HP</abbr></th>
                            <th><abbr title="Add to Encounter"> Add</abbr></th>
                        </tr>
                    </thead>

                    <tbody id="monsterTable">
                        <?php foreach ($monsters as $row) {
                            echo " <tr is-hoverable>
                                <td><a href='monster.php?monster={$row['id']}'>{$row['names']}</a></td>
                                <td>{$row['cr']}</td>
                                <td>{$row['type']}</td>
                                <td>{$row['size']}</td>
                                <td>{$row['ac']}</td>
                                <td>{$row['hp']}</td>
                                <td>
                                    <a href='encounterbuilder.php?id={$row['id']}' class='button is-small' id='add-monster'>
                                        <strong>Add to Encounter</strong>
                                    </a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>


    <!-- Monster Cards-->


    <div class="container is-mobile" id="view-monster-cards">

        <?php foreach ($monsters as $row) { ?>
            <div class='card monster-card' id="monsterTable">
                <header class='card-header'>
                    <a class='card-header-title' href='monster.php?monster=<?php echo "{$row['id']}" ?>'>
                        <?php echo "{$row['names']} " ?>
                    </a>
                </header>

                <div class=' card-content'>
                    <div class='content'>
                        <a href='monster.php?monster=<?php echo "{$row['id']}" ?>'>
                            <img class='monster-card-img' src='<?php echo "{$row['imgpath']}" ?>'>
                        </a>
                        <p>CR: <?php echo "{$row['cr']}" ?></p>
                        <p>Type: <?php echo "{$row['type']}" ?></p>
                        <p>Size: <?php echo "{$row['size']}" ?></p>
                    </div>
                    <footer class='card-footer'>
                        <p class='card-footer-item'>
                            <span>AC:
                                <Strong>
                                    <?php echo "{$row['ac']}" ?>
                                </Strong>
                            </span>
                        </p>
                        <p class='card-footer-item'>
                            <span>HP:
                                <strong>
                                    <?php echo "{$row['hp']}" ?>
                                </strong>
                            </span>
                        </p>
                    </footer>

                    <a href='encounterbuilder.php?id={$row[' id']}' class='button is-small' id='add-monster'>
                        <strong>Add to Encounter</strong>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>



    <!--Footer -->
    <?php include('assets/footer.php'); ?>

</body>

</html>