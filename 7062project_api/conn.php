<?php
$passw = "";

$username = "pmoran05";

$db = "pmoran05";

$host = "pmoran05.lampt.eeecs.qub.ac.uk";

$conn = new mysqli($host, $username, $passw, $db);

if ($conn->error) {
    echo "not connected" . $conn->error;
} else {
    // echo "connection to DB found.";
}
