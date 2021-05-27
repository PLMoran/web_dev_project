<?php
session_start();
include('dataset/conn.php');
include('encountermonster.php');

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


    <title>Encounter Builder</title>

</head>

<body>

    <?php include("assets/navbar.php"); ?>
    <!-- end of navbar-end -->

    <H6 class="title is-1 strap">Encounter Builder</H6>

    <?php
    if (isset($_GET['id']) && !isset($_POST['update'])) {

        $result = mysqli_query($conn, 'SELECT id, names, cr FROM `dand_monster` WHERE id =' . $_GET['id']);
        $encounterMonster = mysqli_fetch_object(($result));
        $monster = new Monster();
        $monster->id = $encounterMonster->id;
        $monster->name = $encounterMonster->names;
        $monster->cr = $encounterMonster->cr;
        $monster->quantity = 1;

        //check monster exists in encounter builder
        $index = -1;
        if (isset($_SESSION['encountertable'])) {
            $encountertable = unserialize(serialize($_SESSION['encountertable']));
            for ($i = 0; $i < count($encountertable); $i++)
                if ($encountertable[$i]->id == $_GET['id']) {
                    $index = $i;
                    break;
                }
        }

        if ($index == -1)
            $_SESSION['encountertable'][] = $monster;
        else {
            $encountertable[$index]->quantity++;
            $_SESSION['encountertable'] = $encountertable;
        }
    }

    //Delete product in encountertable
    if (isset($_GET['index']) && !isset($_POST['update'])) {
        $encountertable = unserialize(serialize($_SESSION['encountertable']));
        unset($encountertable[$_GET['index']]);
        $encountertable = array_values($encountertable);
        $_SESSION['encountertable'] = $encountertable;
    }

    //Update quantity in encountertable
    if (isset($_POST['update'])) {
        $arrQuantity = $_POST['quantity'];

        //check validate quantity
        $valid = 1;
        for ($i = 0; $i < count($encountertable); $i++)
            if (!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1) {
                $valid = 0;
                break;
            }
        if ($valid == 1) {
            $encountertable = unserialize(serialize($_SESSION['encountertable']));
            for ($i = 0; $i < count($encountertable); $i++) {
                $encountertable[$i]->quantity = $arrQuantity[$i];
            }
            $_SESSION['encountertable'] = $encountertable;
        } else $error = 'Quantity is Invalid';
    }
    ?>

    <?php echo isset($error) ? $error : ''; ?>

    <form method="post">
        <div class="table-container">
            <table class="table is-striped">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>CR</th>
                        <th>Quantity <input type="hidden" name="update"></th>
                        <th>Sub Total</th>
                        <th>Option </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $encountertable = unserialize(serialize($_SESSION['encountertable']));
                    $ccr = 0;
                    $index = 0;
                    for ($i = 0; $i < count($encountertable); $i++) {
                        $ccr += $encountertable[$i]->cr * $encountertable[$i]->quantity;
                    ?>
                        <tr>
                            <td><?php echo $encountertable[$i]->id; ?></td>
                            <td><?php echo $encountertable[$i]->name; ?></td>
                            <td><?php echo $encountertable[$i]->cr; ?></td>
                            <td><input type='text' value='<?php echo $encountertable[$i]->quantity ?>' name='quantity[]'></td>
                            <td><?php echo $encountertable[$i]->quantity; ?></td>
                            <td><a href='encounterbuilder.php?index=<?php echo $index; ?>' onclick="return confirm('Are you sure?')">Remove</a> </td>

                        </tr>
                    <?php $index++;
                    }
                    ?>
                    <tr>
                        <td> Combined Challenge Rating</td>
                        <td> <?php echo $ccr; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <br>
    <a href="monstermanual.php"> Return to Monster Manual</a>

    <br>
    <?php
    if (!isset($_SESSION['loggedin'])) {
        echo "
    <form method='post'>
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

        <div class=' control'>
            <input action='encounterbuilder.php' class='button is-small is-success' type='submit' name='updateparty' value='Update Party'>
        </div>
    </form>";
    } else {

        $user = $_SESSION['loggedin'];

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

            <?php echo
            "Encounter Difficulty:     ";

            if ($partylvl > ($ccr * $partynum / 4)) {
                echo "Easy";
            } elseif ($partylvl = ($ccr * $partynum / 4)) {
                echo "Medium";
            } else {
                echo "Hard";
            }
            ?>


            <div class="box">
                <button id='update-party'>Update Party</button>

                <div class="box" id='update-party-form'>
                    <form action="updatepartyprocess.php" method="post">
                        <div>

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
                        </div>

                        <br>

                        <div>
                            <div class='control'>
                                <input class='button is-small is-success' type='submit' name='updateparty' value='Update Party'>
                            </div>
                        </div>
                </div>
                </form>
            </div>
    <?php
        }
    }
    ?>


    <?php
    if (isset($_POST['updateparty'])) {
        $partynum = $_POST['partynum'];
        $partylvl = $_POST['partylvl'];

        echo "<p>Party Members: $partynum</p>
        <p>Party Level: $partylvl</p>
        
        Encounter Difficulty: ";

        if ($partylvl > ($ccr * $partynum / 4)) {
            echo "Easy Encounter";
        }

        if ($partylvl = ($ccr * $partynum / 4)) {
            echo "Medium Encounter";
        }

        if ($partylvl < ($ccr * $partynum / 4)) {
            echo "Hard Encounter";
        }
    }

    ?>

    <!-- footer-->
    <?php include("assets/footer.php"); ?>

</body>

</html>