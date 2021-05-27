<?php
//header('Content-Type: application/json');

include('conn.php');

if (isset($_POST['delete'])) {
    if (isset($_POST['sentid'])) {
        $monsterid = $conn->real_escape_string($_POST['sentid']);
        $monsterid = intval($monsterid);
    }

    $delete = "DELETE FROM dand_monster WHERE dand_monster.id = '$monsterid'";

    $result = $conn->query($delete);


    if (!$result) {
        echo $conn->error;
        die();
    }
}

header("Location: ../7062project/admin/admin.php");
