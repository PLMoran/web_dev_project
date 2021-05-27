<?php
session_start();

if (isset($_GET['monster'])) {
    $id = $_GET['monster'];

    $endpoint = "http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/getapi.php?monster=$id";

    $result = file_get_contents($endpoint);
    $monster = json_decode($result, true);
}
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

    <title>Update Monster</title>
</head>

<body>
    <?php include("../assets/adminnav.php"); ?>
    <h6 class="title is-one strap"> Update Monster</h6>


    <?php
    foreach ($monster as $row) {
        echo "
        <form action='http://pmoran05.lampt.eeecs.qub.ac.uk/7062project_api/updateapi.php' method='POST'>
        <div class='card'>
            
            <header class='card-header' name='name'>
                <p class='card-header-title'>
                    {$row['names']}
                </p>
            </header>

            <div class='card-content'>                          
                <img class='monster-card-img' src='{$row['imgpath']}'>
            </div> 

            <footer class='card-footer'> 
                <p class='card-footer-item'>
                <span>
                    Update AC:  
                    <select name='ac'>
                    <option value = '{$row['ac']}'>Current AC: {$row['ac']} </option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                    </select>
                    </span>
                </p> 

                <p class='card-footer-item'>
                    <span>
                    Update HP:  
                        <input class='input' type='text' name='hp' value='{$row['hp']}' >
                    </span>
                </p>

                <p class='card-footer-item'>
                <span>
                Update CR:  
                    <select name='cr'>
                    <option value='{$row['cr']}'>Current CR: {$row['cr']} </option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                    </select>
                    </span>
                </p>


            </footer>
            <footer class='card-footer'>
                <p class='card-footer-item'>
                <span>
                Update Strength
                <select name='str'>
                    <option value='{$row['strength']}'>Current Str: {$row['strength']} </option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                    <option value='14'>14</option>
                    <option value='15'>15</option>
                    <option value='16'>16</option>
                    <option value='17'>17</option>
                    <option value='18'>18</option>
                    <option value='19'>19</option>
                    <option value='20'>20</option>
                    <option value='21'>21</option>
                    <option value='22'>22</option>
                    <option value='23'>23</option>
                    <option value='24'>24</option>
                    <option value='25'>25</option>
                    <option value='26'>26</option>
                    <option value='27'>27</option>
                    <option value='28'>28</option>
                    <option value='29'>29</option>
                    <option value='30'>30</option>
            </select>
            </span>
            </p>

            <p class='card-footer-item'>
            <span>
            Update Intelligence
            <select name='int'>
                <option value='{$row['inteligence']}'>Current Int: {$row['inteligence']} </option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
            </select>
            </span>
            </p>
        </footer>

        <footer class='card-footer'>
            <p class='card-footer-item'>
            <span>
            Update Constitution
                <select name='con'>
                    <option value='{$row['constitution']}'>Current Con: {$row['constitution']} </option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                    <option value='14'>14</option>
                    <option value='15'>15</option>
                    <option value='16'>16</option>
                    <option value='17'>17</option>
                    <option value='18'>18</option>
                    <option value='19'>19</option>
                    <option value='20'>20</option>
                    <option value='21'>21</option>
                    <option value='22'>22</option>
                    <option value='23'>23</option>
                    <option value='24'>24</option>
                    <option value='25'>25</option>
                    <option value='26'>26</option>
                    <option value='27'>27</option>
                    <option value='28'>28</option>
                    <option value='29'>29</option>
                    <option value='30'>30</option>
                </select>
                </span>
            </p>

            <p class='card-footer-item'>
                <span>
                Update Wisdom
                    <select name='wis'>
                        <option value='{$row['wisdom']}'>Current Wis: {$row['wisdom']} </option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                    </select>
                </span>
            </p>
        </footer> 

        <footer class='card-footer'>  
            <p class='card-footer-item'>
                <span>
                Update Dexterity
                    <select name='dex'>
                        <option value='{$row['dexterity']}'>Current Dex: {$row['dexterity']} </option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                    </select>
                </span>
            </p>
        
            <p class='card-footer-item'>
                <span>
                Update Charisma
                    <select name='cha'>
                        <option value ='{$row['charisma']}'>Current Cha: {$row['charisma']} </option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='13'>13</option>
                        <option value='14'>14</option>
                        <option value='15'>15</option>
                        <option value='16'>16</option>
                        <option value='17'>17</option>
                        <option value='18'>18</option>
                        <option value='19'>19</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                        <option value='25'>25</option>
                        <option value='26'>26</option>
                        <option value='27'>27</option>
                        <option value='28'>28</option>
                        <option value='29'>29</option>
                        <option value='30'>30</option>
                    </select>
                </span>
            </p>
        </footer>

                <footer class='card-footer'>  
                    <p class='card-footer-item'> Size: {$row['size']}</p>
                    <p class='card-footer-item'>Movement: {$row['movement']}</p>
                </footer>

                <footer class='card-footer'>
                    <p class='card-footer-item'>Type: {$row['type']}</p>              
                    <p class='card-footer-item'>Alignment: {$row['alignment']}</p>
                    <p class='card-footer-item'>Status: {$row['status']}</p>
                </footer>

                <footer class='card-footer'>
                    <p class='card-footer-item'>Source Book: {$row['source']}</p>
                </footer>

                
                    
                
        </div>

        <div class='select is-hidden'>
        <select name='sentid' value='{$row['id']}'>
            <option>{$row['id']}</option>
        </select>
        </div>

    <br>
    
        <div class='content has-text-centered'>
            <div class=' control'>
                <input class='button is-large is-success' type='submit' name='update' value='Update Monster'>
            </div>
        </div>

        
    </form>";
    }

    ?>

</body>

</html>