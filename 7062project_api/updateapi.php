<?php
header('Content-Type: application/json');
include('conn.php');

if (isset($_POST['update'])) {

    if (isset($_POST['sentid'])) {
        $id = $conn->real_escape_string($_POST['sentid']);
        $id = intval($id);
    }

    if (isset($_POST['cr'])) {
        $cr = $conn->real_escape_string($_POST['cr']);
        $cr = floatval($cr);
    }

    if (isset($_POST['ac'])) {
        $ac = $conn->real_escape_string($_POST['ac']);
        $hp = intval($ac);
    }

    if (isset($_POST['hp'])) {
        $hp = $conn->real_escape_string($_POST['hp']);
        $hp = intval($hp);
    }

    if (isset($_POST['str'])) {
        $str = $conn->real_escape_string($_POST['str']);
        $str = intval($str);
    }

    if (isset($_POST['dex'])) {
        $dex = $conn->real_escape_string($_POST['dex']);
        $dex = intval($dex);
    }

    if (isset($_POST['con'])) {
        $con = $conn->real_escape_string($_POST['con']);
        $con = intval($con);
    }

    if (isset($_POST['int'])) {
        $int =   $conn->real_escape_string($_POST['int']);
        $int = intval($int);
    }

    if (isset($_POST['wis'])) {
        $wis =  $conn->real_escape_string($_POST['wis']);
        $wis = intval($wis);
    }

    if (isset($_POST['cha'])) {
        $cha = $conn->real_escape_string($_POST['cha']);
        $cha = intval($cha);
    }


    $update = "UPDATE dand_monster SET cr = $cr, ac = $ac, hp = $hp, strength =$str, dexterity = $dex, constitution = $con, inteligence = $int, wisdom = $wis, charisma = $cha WHERE dand_monster.id = $id";
    //echo $update;

    $addupdate = $conn->query($update);

    if (!$addupdate) {
        echo $conn->error;
    } else {
        echo "added";
    }

    header("Location: ../7062project/admin/updatemonster.php?monster=$id");
}
