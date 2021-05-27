<?php
session_start();
$endpoint = "http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/getapi.php?allmonsters";

$dataset = file_get_contents($endpoint);

$monsters = json_decode($dataset, true);

if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
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

    <title>Administrator</title>
</head>

<body>
    <?php include("../assets/adminnav.php"); ?>

    <h6 class="title is-1 strap">Welcome to the DanD Administrator Page</h6>

    <p>Create New Monster</p>
    <a class="button" href="createmonster.php">Create Monster</a>

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
                    <div class="control">
                        <input class="input" id="myInput" placeholder="Search...">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <th><abbr title="Update Monster"> Update</abbr></th>
                            <th><abbr title="Delete Monster"> Delete</abbr></th>
                        </tr>
                    </thead>

                    <tbody id="monsterTable">
                        <?php foreach ($monsters as $row) {
                            echo " <tr is-hoverable>
                                <td>{$row['names']}</td>
                                <td>{$row['cr']}</td>
                                <td>{$row['type']}</td>
                                <td>{$row['size']}</td>
                                <td>{$row['ac']}</td>
                                <td>{$row['hp']}</td>
                                <td>
                                    <a class='button is-small' id='admin-monster' href='updatemonster.php?monster={$row['id']}'>
                                        <strong>Update</strong>
                                    </a>
                                </td>

                                <td>
                                    <a class='button is-small' id='add-monster' href='deletemonster.php?monster={$row['id']}'>
                                        <strong>Delete</strong>
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

</body>


</html>