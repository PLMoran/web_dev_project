<?php

include("conn.php");

$file = "dnd_monsters.csv";

if (file_exists($file)) {

     $contents = fopen($file, "r");

     $baseCR = 0;
     $attributebase = 10;

     while (($line = fgetcsv($contents)) !== FALSE) {

          /* Name*/
          if (empty($line[0])) {
               $line[0] = "Monster";
          } else {
               $line = str_replace("-", " ", $line);
          }

          $name = ucwords($line[0], " ");


          /* img-path*/
          if (empty($line[1])) {

               $imgpath = "https://cdn.britannica.com/02/196402-050-044E396D/Photograph-image-Loch-Ness-monster-surgeon-hoax-1934.jpg";
          } else {
               $line[1] = "https://www.aidedd.org/dnd/images/" . str_replace(["adult ", "ancient ", "young "], "", $line[0]) . ".jpg";
               $imgpath = str_replace(" ", "-", $line[1]);
          }

          /*check if imgpath returns a 200*/
          $file_headers = get_headers($imgpath);
          $string = $file_headers[0];
          if (strpos($string, "200")) {
               $imgpath;
          } else {
               $imgpath = "http://2e.aonprd.com/Images/Ancestries/Goblin02.png";
          }


          /* CR*/
          if (empty($line[2])) {
               $line[2] = $baseCR;
          }

          /* Type */
          $type = strpos($line[3], "aberration");
          if ($type !== false) {
               $line[3] = 1;
          }

          $type = strpos($line[3], "swarm of Tiny beasts");
          if ($type !== false) {
               $line[3] = 13;
          }

          $type = strpos($line[3], "beast");
          if ($type !== false) {
               $line[3] = 2;
          }
          $type = strpos($line[3], "celestial");
          if ($type !== false) {
               $line[3] = 3;
          }

          $type = strpos($line[3], "dragon");
          if ($type !== false) {
               $line[3] = 4;
          }
          $type = strpos($line[3], "elemental");
          if ($type !== false) {
               $line[3] = 5;
          }
          $type = strpos($line[3], "fey");
          if ($type !== false) {
               $line[3] = 6;
          }
          $type = strpos($line[3], "fiend");
          if ($type !== false) {
               $line[3] = 7;
          }
          $type = strpos($line[3], "giant");
          if ($type !== false) {
               $line[3] = 8;
          }
          $type = strpos($line[3], "humanoid");
          if ($type !== false) {
               $line[3] = 9;
          }
          $type = strpos($line[3], "monstrosity");
          if ($type !== false) {
               $line[3] = 10;
          }
          $type = strpos($line[3], "ooze");
          if ($type !== false) {
               $line[3] = 11;
          }
          $type = strpos($line[3], "plant");
          if ($type !== false) {
               $line[3] = 12;
          }

          $type = strpos($line[3], "undead");
          if ($type !== false) {
               $line[3] = 14;
          }
          $type = strpos($line[3], "construct");
          if ($type !== false) {
               $line[3] = 15;
          }

          /* Size */
          $size = strpos($line[4], "Tiny");
          if ($size !== false) {
               $line[4] = 1;
          }

          $size = strpos($line[4], "Small");
          if ($size !== false) {
               $line[4] = 2;
          }

          $size = strpos($line[4], "Medium");
          if ($size !== false) {
               $line[4] = 3;
          }
          $size = strpos($line[4], "Large");
          if ($size !== false) {
               $line[4] = 4;
          }

          $size = strpos($line[4], "Huge");
          if ($size !== false) {
               $line[4] = 5;
          }

          $size = strpos($line[4], "Gargantuan");
          if ($size !== false) {
               $line[4] = 6;
          }


          /* Movement*/
          if (empty($line[7])) {
               $line[7] = 1;
          }

          $move = strpos($line[7], "fly, swim");
          if ($move !== false) {
               $line[7] = 4;
          }

          $move = strpos($line[7], "fly");
          if ($move !== false) {
               $line[7] = 2;
          }

          $move = strpos($line[7], "swim");
          if ($move !== false) {
               $line[7] = 3;
          }


          /* Alignment */
          if (empty($line[8])) {
               $line[8] = 1;
          }

          $align = strpos($line[8], "any alignment");
          if ($align !== false) {
               $line[8] = 1;
          }

          $align = strpos($line[8], "any chaotic alignment");
          if ($align !== false) {
               $line[8] = 2;
          }

          $align = strpos($line[8], "any evil alignment");
          if ($align !== false) {
               $line[8] = 3;
          }

          $align = str_replace("-", " ", $line);
          $align = strpos($line[8], 'any non good alignment');
          if ($align !== false) {
               $line[8] = 16;
          }
          $align = str_replace("-", " ", $line);
          $align = strpos($line[8], "any non lawful alignment");
          if ($align !== false) {
               $line[8] = 5;
          }
          $align = strpos($line[8], "chaotic evil");
          if ($align !== false) {
               $line[8] = 6;
          }
          $align = strpos($line[8], "chaotic good");
          if ($align !== false) {
               $line[8] = 7;
          }
          $align = strpos($line[8], "chaotic neutral");
          if ($align !== false) {
               $line[8] = 8;
          }
          $align = strpos($line[8], "lawful evil");
          if ($align !== false) {
               $line[8] = 9;
          }
          $align = strpos($line[8], "lawful good");
          if ($align !== false) {
               $line[8] = 10;
          }
          $align = strpos($line[8], "lawful neutral");
          if ($align !== false) {
               $line[8] = 11;
          }
          $align = strpos($line[8], "neutral");
          if ($align !== false) {
               $line[8] = 12;
          }
          $align = strpos($line[8], "neutral evil");
          if ($align !== false) {
               $line[8] = 13;
          }
          $align = strpos($line[8], "neutral good");
          if ($align !== false) {
               $line[8] = 14;
          }
          $align = strpos($line[8], "unaligned");
          if ($align !== false) {
               $line[8] = 15;
          }

          /* Legendary status*/

          if (empty($line[9])) {
               $line[9] = 2;
          } else {
               $line[9] = 1;
          }

          /* Source Book*/
          if (empty($line[10])) {
               $line[10] = 16;
          }

          $source = strpos($line[10], "Adventures (Curse of Strahd)");
          if ($source !== false) {
               $line[10] = 1;
          }
          $source = strpos($line[10], "Adventures (Descent into Avernus)");
          if ($source !== false) {
               $line[10] = 2;
          }
          $source = strpos($line[10], "Adventures (Dragon Heist)");
          if ($source !== false) {
               $line[10] = 3;
          }
          $source = strpos($line[10], "Adventures (Dungeon of the Mad Mage)");
          if ($source !== false) {
               $line[10] = 4;
          }
          $source = strpos($line[10], "Adventures (Princes of the Apocalypse)");
          if ($source !== false) {
               $line[10] = 5;
          }
          $source = strpos($line[10], "Adventures (Storm King's Thunder)");
          if ($source !== false) {
               $line[10] = 6;
          }
          $source = strpos($line[10], "Adventures (Tomb of Annihilation)");
          if ($source !== false) {
               $line[10] = 7;
          }
          $source = strpos($line[10], "Adventures (Tyranny of Dragons)");
          if ($source !== false) {
               $line[10] = 8;
          }
          $source = strpos($line[10], "Essentials Kit");
          if ($source !== false) {
               $line[10] = 9;
          }
          $source = strpos($line[10], "Extra");
          if ($source !== false) {
               $line[10] = 10;
          }

          $source = strpos($line[10], "(SRD)");
          if ($source !== false) {
               $line[10] = 13;
          }

          $source = strpos($line[10], "(BR)");
          if ($source !== false) {
               $line[10] = 12;
          }
          $source = strpos($line[10], "Monster Manual");
          if ($source !== false) {
               $line[10] = 11;
          }

          $source = strpos($line[10], "Mordenkainen's");
          if ($source !== false) {
               $line[10] = 14;
          }
          $source = strpos($line[10], "Volo's");
          if ($source !== false) {
               $line[10] = 15;
          }

          /* Strength*/
          if (empty($line[11])) {
               $attributemodivier = rand(-2, 20);
               $line[11] = $attributebase + $attributemodivier;
          }
          /* Dexterity*/
          if (empty($line[12])) {
               $attributemodivier = rand(-2, 20);
               $line[12] = $attributebase + $attributemodivier;
          }
          /* Constitution*/
          if (empty($line[13])) {
               $attributemodivier = rand(-2, 20);
               $line[13] = $attributebase + $attributemodivier;
          }
          /* Inteligence*/
          if (empty($line[14])) {
               $attributemodivier = rand(-2, 20);
               $line[14] = $attributebase + $attributemodivier;
          }

          /* Wisdom*/
          if (empty($line[15])) {
               $attributemodivier = rand(-2, 20);
               $line[15] = $attributebase + $attributemodivier;
          }

          /* Charisma*/
          if (empty($line[16])) {
               $attributemodivier = rand(-2, 20);
               $line[16] = $attributebase + $attributemodivier;
          }

          $insert = "INSERT INTO dand_monster (names, imgpath, cr, typeID, sizeID, ac, hp, movementID, alignmentID, statusID, sourceID, strength, dexterity, constitution, inteligence, wisdom, charisma)
          VALUES ('{$name}','{$imgpath}','{$line[2]}','{$line[3]}','{$line[4]}',{$line[5]},{$line[6]},'{$line[7]}','{$line[8]}','{$line[9]}','{$line[10]}',{$line[11]},{$line[12]},{$line[13]},{$line[14]},{$line[15]},{$line[16]});";

          $result = $conn->query($insert);

          if (!$result) {
               echo $conn->error;
               die();
          }
     }
}
