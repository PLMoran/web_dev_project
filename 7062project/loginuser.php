<?php

session_start();
include('dataset/conn.php');

$sentusername = $_POST['username'];
$sentpassword = $_POST['password'];

$checkuser = "SELECT * FROM dand_user WHERE username = '$sentusername' AND password =SHA1('$sentpassword')";

$result = $conn->query($checkuser);

if (!$result) {
    echo $conn->error;
}

$numrows = $result->num_rows;

if ($numrows > 0) {
    $_SESSION['loggedin'] = $sentusername;
    header("Location: userprofile.php");
} else {
    header("Location: login.php");
}


$checkadmin = "SELECT * FROM dand_user WHERE username = '$sentusername' AND password =SHA1('$sentpassword') AND admin ='1'";

$res = $conn->query($checkadmin);

if (!$res) {
    echo $conn->error;
}

$numrows = $res->num_rows;

if ($numrows > 0) {
    $_SESSION['admin'] = $sentusername;
    header("Location: admin/admin.php");
} else {
    header("Location: userprofile.php");
}
