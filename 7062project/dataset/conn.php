<?php

$host = "pmoran05.lampt.eeecs.qub.ac.uk";
$db = "pmoran05";
$username = "pmoran05";
$passw = "YRFvfzMR0DpY3S01";

$conn = new mysqli($host, $username, $passw, $db);

if ($conn->error) {
    echo "not connected" . $conn->error;
}
