<?php
include('dataset/conn.php');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($username) && !empty($email) && !empty($password)) {

    //save to database
    $query = "INSERT INTO dand_party (partyID, partyNumber, partyLevel) values (NULL, 4, 1)";
    $partyid = $conn->query($query);

    printf("New Record has id %d.\n", $partyid = $conn->insert_id);

    if (!$mysqli) {
        echo $conn->error;
        die();
    }

    $insertquery = "INSERT INTO dand_user (userID, username, password, email, partyID, admin) values (NULL,'$username', SHA1('$password'),'$email',$partyid,0)";


    $result = $conn->query($insertquery);

    if (!$result) {
        echo $conn->error;
        die();
    }

    header("Location: index.php");
    die;
} else {
    echo "Please Enter Valid Information!";
}
