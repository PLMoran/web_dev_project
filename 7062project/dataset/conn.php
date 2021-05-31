<?php

$host = "pmoran05.lampt.eeecs.qub.ac.uk";
$db = "pmoran05";
$username = "pmoran05";
$passw = "";

$conn = new mysqli($host, $username, $passw, $db);

if ($conn->error) {
    echo "not connected" . $conn->error;
}
