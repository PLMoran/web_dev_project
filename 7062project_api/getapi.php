<?php
header('Content-Type: application/json');
include('conn.php');


/* GET ALL MONSTERS */
if (isset($_GET['allmonsters'])) {

    $checkapi = "SELECT
    dand_monster.id,
    dand_monster.names,
    dand_monster.imgpath,
    dand_monster.cr,
    dand_type.type,
    dand_size.size,
    dand_monster.ac,
    dand_monster.hp,
    dand_movement.movement,
    dand_alignment.alignment,
    dand_status.status,
    dand_source.source,
    dand_monster.strength,
    dand_monster.dexterity,
    dand_monster.constitution,
    dand_monster.inteligence,
    dand_monster.wisdom,
    dand_monster.charisma
FROM
    `dand_monster`
INNER JOIN dand_type ON dand_monster.typeID = dand_type.id
INNER JOIN dand_size ON dand_monster.sizeID = dand_size.id
INNER JOIN dand_movement ON dand_monster.movementID = dand_movement.id
INNER JOIN dand_alignment ON dand_monster.alignmentID = dand_alignment.id
INNER JOIN dand_status ON dand_monster.statusID = dand_status.id
INNER JOIN dand_source ON dand_monster.sourceID = dand_source.id
ORDER BY
    `dand_monster`.`names` ASC
    ";

    $result = $conn->query($checkapi);

    if (!$result) {
        echo $conn->error;
    }

    $dataset = mysqli_fetch_all($result, $resulttype = MYSQLI_ASSOC);

    echo json_encode($dataset);
};

/* GET ONE MONSTER */
if (isset($_GET['monster'])) {

    $monsterID = $_GET['monster'];

    $checkapi = "SELECT
    dand_monster.id,
    dand_monster.names,
    dand_monster.imgpath,
    dand_monster.cr,
    dand_type.type,
    dand_size.size,
    dand_monster.ac,
    dand_monster.hp,
    dand_movement.movement,
    dand_alignment.alignment,
    dand_status.status,
    dand_source.source,
    dand_monster.strength,
    dand_monster.dexterity,
    dand_monster.constitution,
    dand_monster.inteligence,
    dand_monster.wisdom,
    dand_monster.charisma
FROM
    `dand_monster`
INNER JOIN dand_type ON dand_monster.typeID = dand_type.id
INNER JOIN dand_size ON dand_monster.sizeID = dand_size.id
INNER JOIN dand_movement ON dand_monster.movementID = dand_movement.id
INNER JOIN dand_alignment ON dand_monster.alignmentID = dand_alignment.id
INNER JOIN dand_status ON dand_monster.statusID = dand_status.id
INNER JOIN dand_source ON dand_monster.sourceID = dand_source.id
WHERE dand_monster.id = $monsterID";

    $result = $conn->query($checkapi);

    if (!$result) {
        echo $conn->error;
    }

    $dataset = mysqli_fetch_all($result, $resulttype = MYSQLI_ASSOC);

    echo json_encode($dataset);
};
