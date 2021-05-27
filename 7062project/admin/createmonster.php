<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../stylesheets/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/scripting.js"></script>

    <title>Monster</title>
</head>

<body>
    <?php include("../assets/adminnav.php"); ?>
    <div class="box">
        <form action="http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/createapi.php" method="post">

            <p>Monster Name</p>
            <input class="input" type="text" name="name" placeholder="">

            <p>Image URL</p>
            <input class="input" type="text" name="imgpath" placeholder="">


            <p>CR</p>
            <div class="select">
                <select name="cr">
                    <option value="0.125">1/8</option>
                    <option value="0.25">1/4</option>
                    <option value="0.5">1/2</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                </select>
            </div>

            <p>Type</p>
            <div class="select">
                <select name="type">
                    <option value="1">Aberration</option>
                    <option value="2">Beast</option>
                    <option value="3">Celestial</option>
                    <option value="15">Construct</option>
                    <option value="4">Dragon</option>
                    <option value="5">Elemental</option>
                    <option value="6">Fey</option>
                    <option value="7">Fiend</option>
                    <option value="8">Giant</option>
                    <option value="9">Humanoid</option>
                    <option value="10">Monstrosity</option>
                    <option value="11">Ooze</option>
                    <option value="12">Plant</option>
                    <option value="13">Swarm of Tiny Beasts</option>
                    <option value="14">Undead</option>
                </select>
            </div>

            <p>Size</p>
            <div class="select">
                <select name="size">
                    <option value="1">Tiny</option>
                    <option value="2">Small</option>
                    <option value="3">Medium</option>
                    <option value="4">Large</option>
                    <option value="5">Huge</option>
                    <option value="6">Gargantuan</option>
                </select>
            </div>


            <p>AC</p>
            <div class="select">
                <select name="ac">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                </select>
            </div>

            <p>Health Points</p>
            <input class="input" type="text" name="hp" placeholder="Enter Health Points">

            <p>Movement</p>
            <div class="select">
                <select name="move">
                    <option value="1">Run</option>
                    <option value="2">Fly</option>
                    <option value="3">Swim</option>
                    <option value="4">Swim/Fly</option>
                </select>
            </div>

            <p>Alignment</p>
            <div class="select">
                <select name="align">
                    <option value="1">Any Alignment</option>
                    <option value="2">Any Chaotic Alignment</option>
                    <option value="3">Any Evil Alignment</option>
                    <option value="5">Any Non-Lawful Alignment</option>
                    <option value="6">Chaotic Evil</option>
                    <option value="7">Chaotic Good</option>
                    <option value="8">Chaotic Neutral</option>
                    <option value="9">Lawful Evil</option>
                    <option value="10">Lawful Good</option>
                    <option value="11">Lawful Neutral</option>
                    <option value="12">True Neutral</option>
                    <option value="13">Neutral Evil</option>
                    <option value="14">Neutral Good</option>
                    <option value="15">Unaligned</option>
                    <option value="16">Any Non-Good Alignment</option>
                </select>
            </div>


            <p>Legendary Status</p>
            <div class="select" type="text">
                <select name="status">
                    <option value="1">Legendary</option>
                    <option value="2">Non-Legendary</option>
                </select>
            </div>

            <p>Source Material</p>
            <div class="select">
                <select name="source">
                    <option value="16">Homebrew</option>
                </select>
            </div>
            <br>

            <p>Attribute Scores</p>

            <div class="columns">
                <div class="column">
                    <p>Strength</p>
                    <div class="select">
                        <select name="str">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>

                <div class="column">
                    <p>Dexterity</p>
                    <div class="select">
                        <select name="dex">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>

                <div class="column">
                    <p>Constiution</p>
                    <div class="select">
                        <select name="con">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>

            <div class="columns">
                <div class="column">
                    <p>Intelligence</p>
                    <div class="select">
                        <select name="int">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>

                <div class="column">
                    <p>Wisdom</p>
                    <div class="select">
                        <select name="wis">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>

                <div class="column">
                    <p>Charisma</p>
                    <div class="select">
                        <select name="cha">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
            </div>

            <br>
            <div class='content has-text-centered'>
                <div class=' control'>
                    <input class='button is-large is-success' type='submit' name="create" value='Create Monster'>
                </div>
            </div>
        </form>
    </div>
</body>

</html>