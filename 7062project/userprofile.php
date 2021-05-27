<?php
session_start();

include('dataset/conn.php');

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
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

    <title>User Profile</title>

</head>

<body>
    <?php include("assets/navbar.php"); ?>
    <!--Header -->

    <?php
    $user = $_SESSION['loggedin'];
    echo "<p> Logged in as: $user</p>";

    $checkuser = "SELECT * FROM dand_user WHERE username = '$user'";

    $result = $conn->query($checkuser);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $partyid = $row['partyID'];
        }
    } else {
        echo "0 results";
    }
    ?>

    <br>
    <p>Your Party</p>

    <?php
    $checkparty = "SELECT * FROM dand_party WHERE partyID = $partyid";
    $result = $conn->query($checkparty);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $partyid = $row['partyID'];
            $partynum = $row['partyNumber'];
            $partylvl = $row['partyLevel'];
        }
    ?>

        <p>Party Members: <?php echo "$partynum" ?></p>

        <p>Party Level: <?php echo "$partylvl" ?></p>

        <br>
        <form action="updatepartyprocess.php" method="post">
            <div>
                <p>Update Party</p>
                <div>
                    <p>Party Members</p>
                    <select name='partynum'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                    </select>
                </div>

                <div>
                    <p>Party Level</p>
                    <select name='partylvl'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                    </select>
                </div>

                <div class='select is-hidden'>
                    <p>Party Id</p>
                    <select name='partyid'>
                        <option value='<?php echo "$partyid" ?>'> <?php echo "$partyid" ?></option>
                    </select>
                </div>


                <br>

                <div>
                    <div class='control'>
                        <input class='button is-small is-success' type='submit' name='updateparty' value='Update Party'>
                    </div>
                </div>
            </div>
        </form>


        <br>
        <p>Encounters Table:</p>

    <?php } ?>


    <!--Footer -->
    <?php include('assets/footer.php'); ?>

</body>

</html>