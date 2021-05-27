<?php
header('Content-Type: application/json');
include('conn.php');


if (isset($_POST['create'])) {


    /* Name WORKING*/
    if (isset($_POST['name'])) {
        $monstername = $conn->real_escape_string($_POST['name']);
    }
    if (empty($monstername)) {
        $monstername = "Player Created Monster";
    }


    /* Image WORKING */
    if (isset($_POST['imgpath'])) {
        $monsterimgpath = $conn->real_escape_string($_POST['imgpath']);
    }
    if (empty($monsterimgpath)) {
        $monsterimgpath = "https://cdn.britannica.com/02/196402-050-044E396D/Photograph-image-Loch-Ness-monster-surgeon-hoax-1934.jpg";
    }


    /* CR WORKING */
    if (isset($_POST['cr'])) {
        $monstercr = $_POST['cr'];
        $monstercr = floatval($monstercr);
    }
    if (empty($monstercr)) {
        $monstercr = 0;
    }


    /* TYPE WORKING*/
    if (isset($_POST['type'])) {
        $monstertype = $conn->real_escape_string($_POST['type']);
        $monstertype = intval($monstertype);
    }
    if (empty($monstertype)) {
        $monstertype = 1;
    }


    /* SIZE WORKING*/
    if (isset($_POST['size'])) {
        $monstersize = $conn->real_escape_string($_POST['size']);
        $monstersize = intval($monstersize);
    }
    if (empty($monstersize)) {
        $monstersize = 1;
    }

    /* AC WORKING*/
    if (isset($_POST['ac'])) {
        $monsterac = $conn->real_escape_string($_POST['ac']);
        $monsterac = intval($monsterac);
    }
    if (empty($monsterac)) {
        $monsterac = 0;
    }


    /* HP WORKING*/
    if (!isset($monsterhp)) {
        $monsterhp = 0;
    }
    if (isset($_POST['hp'])) {
        $monsterhp = $conn->real_escape_string($_POST['hp']);
        $monsterhp = intval($monsterhp);
    }


    /* Movement WORKING */
    if (isset($_POST['move'])) {
        $monstermove = $conn->real_escape_string($_POST['move']);
        $monstermove = intval($monstermove);
    }
    if (empty($monstermove)) {
        $monstermove = 1;
    }


    /* Alignment WORKING */
    if (isset($_POST['align'])) {
        $monsteralign = $conn->real_escape_string($_POST['align']);
        $monsteralign = intval($monsteralign);
    }
    if (empty($monsteralign)) {
        $monsteralign = 1;
    }


    /* Legendary status WORKING*/
    if (isset($_POST['status'])) {
        $monsterstatus = $conn->real_escape_string($_POST['status']);
        $monsterstatus = intval($monsterstatus);
    }
    if (empty($monsterstatus)) {
        $monsterstatus = 2;
    }


    /* Source */
    if (isset($_POST['source'])) {
        $monstersource = $conn->real_escape_string($_POST['source']);
        $monstersource = intval($monstersource);
    }
    if (empty($monstersource)) {
        $monstersource = 16;
    }


    /* Strength */
    if (isset($_POST['str'])) {
        $monsterstr = $conn->real_escape_string($_POST['str']);
        $monsterstr = intval($monsterstr);
    }
    if (empty($monsterstr)) {
        $monsterstr = 0;
    }


    /* Dexterity */
    if (isset($_POST['dex'])) {
        $monsterdex = $conn->real_escape_string($_POST['dex']);
        $monsterdex = intval($monsterdex);
    }
    if (empty($monsterdex)) {
        $monsterdex = 0;
    }


    /* Constitution */
    if (isset($_POST['con'])) {
        $monstercon = $conn->real_escape_string($_POST['con']);
        $monstercon = intval($monstercon);
    }
    if (empty($monstercon)) {
        $monstercon = 0;
    }


    /* Intelligence */
    if (isset($_POST['int'])) {
        $monsterint = $conn->real_escape_string($_POST['int']);
        $monsterint = intval($monsterint);
    }
    if (empty($monsterint)) {
        $monsterint = 0;
    }


    /* Wisdom */
    if (isset($_POST['wis'])) {
        $monsterwis = $conn->real_escape_string($_POST['wis']);
        $monsterwis = intval($monsterwis);
    }
    if (empty($monsterwis)) {
        $monsterwis = 0;
    }


    /* Charisma */
    if (isset($_POST['cha'])) {
        $monstercha = $conn->real_escape_string($_POST['cha']);
        $monstercha = intval($monstercha);
    }
    if (empty($monstercha)) {
        $monstercha = 0;
    }


    $insertquery = "INSERT INTO dand_monster (id, names, imgpath, cr, typeID, sizeID, ac, hp, movementID, alignmentID, statusID, sourceID, strength, dexterity, constitution, inteligence, wisdom, charisma)
VALUES (NULL, '$monstername', '$monsterimgpath', $monstercr, $monstertype, $monstersize, $monsterac, $monsterhp, $monstermove, $monsteralign, $monsterstatus, $monstersource, $monsterstr, $monsterdex, $monstercon, $monsterint, $monsterwis, $monstercha)";

    $result = $conn->query($insertquery);

    if (!$result) {
        echo $conn->error;
    } else {
        $dataset = mysqli_fetch_all($result, $resulttype = MYSQLI_ASSOC);

        echo json_encode($dataset);
    }

    header("Location: ../7062project/admin/admin.php");
}
