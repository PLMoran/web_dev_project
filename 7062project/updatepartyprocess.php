<?php
session_start();
include('dataset/conn.php');


if (isset($_POST['updateparty'])) {

    if (isset($_POST['partyid'])) {
        if (!isset($sentid)) {
            $sentid = mysqli_real_escape_string($conn, $_POST['partyid']);
            $sentid = intval($sentid);
        }
    }
    $updatemember = mysqli_real_escape_string($conn, $_POST['partynum']);
    $updatemember = intval($updatemember);

    $updatelevel = mysqli_real_escape_string($conn, $_POST['partylvl']);
    $updatelevel = intval($updatelevel);


    echo "$sentid, $updatemember, $updatelevel";



    $update = "UPDATE dand_party SET partyNumber=$updatemember, partyLevel=$updatelevel WHERE partyID= $sentid";

    $addupdate = $conn->query($update);

    if (!$addupdate) {
        echo $conn->error;
    } else {
        echo "added";
    }

    header("Location: userprofile.php");
}
