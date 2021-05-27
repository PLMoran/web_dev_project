<?php

$id = ($_POST['sentid']);
$ac = ($_POST['ac']);
$cr = ($_POST['cr']);
$hp = ($_POST['hp']);
$str = ($_POST['str']);
$dex = ($_POST['dex']);
$con = ($_POST['con']);
$int = ($_POST['int']);
$wis = ($_POST['wis']);
$cha = ($_POST['cha']);


$endpoint = "http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/updateapi.php?updatemonster";

$posted = array('id' => $id, 'ac' => $ac, 'cr' => $cr, 'hp' => $hp, 'str' => $str, 'dex' => $dex, 'con' => $con, 'int' => $int, 'wis' => $wis,  'cha' => $cha);

$opts = array(
    'http' => array(
        'method' => 'PUT',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => json_encode($posted)
    )
);

$context = stream_context_create($opts);

$result = file_get_contents($endpoint, false, $context);
