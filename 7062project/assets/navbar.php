<?php

if (!isset($_SESSION['loggedin'])) {
    echo "
<nav class='navbar' role='navigation' aria-label='main navigation'>
    <div class='navbar-brand'>
        <a class='navbar-item' href='index.php'>
            <img src='https://i.imgur.com/lTvC0FW.png' width='112' height='28'>

        </a>

        <a role='button' class='navbar-burger' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>

            <a role='button' class='navbar-burger is-active' id='active-on-click' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
            </a>
        </a>
    </div>

    <div id='navbarBasicExample' class='navbar-menu'>
        <div class='navbar-start'>
            <a class='navbar-item' href='index.php'>Home</a>
            
            <div class='navbar-item has-dropdown is-hoverable'>

                <a class='navbar-link'>
                    GM Tools
                </a>

                <div class='navbar-dropdown'>

                    <a class='navbar-item' href='monstermanual.php'>
                        Monster Manual
                    </a>

                    <a class='navbar-item' href='encounterbuilder.php'>
                        Encounter Builder
                    </a>

                </div>

            </div>

        </div>

        <div class='navbar-end'>

            <div class='navbar-item'>
                <div class='buttons has-addons is-right'>

                    <a class='button is-dark' href='register.php'>
                        <strong>Sign up</strong>
                    </a>

                    <a class='button is-light' id='log-in'>
                        <strong>Log in</strong>
                    </a>

                </div>
            </div>

        </div>

    </div>

</nav>

<!-- end of navbar-end -->

<div class='column is-one-fifth-mobile is-offset-10 log-in'>

    <div class='card'>
        <div class='field' id='enter-log-in'>
        <form method='POST' action='loginuser.php'>
            <label class='label'>Username</label>
            <div class='control'>
                <input class='input' type='text' name='username' placeholder='User Name'>
            </div>

            <label class='label'>Password</label>
            <div class='control'>
                <input class='input' type='password' name='password' placeholder='Password'>
            </div>

            <label class='label'>
                <button class='button is-small control-log-in' type='submit'>
                    Log in
                </button>
                </label>

            </form>
            
            <label class='label'>
                <button class='button is-small control-cancel'>
                    Cancel
                </button>
            </label>
            
        </div>
    </div>
</div>

<!-- end of log in pop out-->

<div class='burger-expand'>
    <div class='buttons has-addons is-right' id='burger-register'>
        <a class='button is-dark' href='register.php'>
            <strong>Sign up</strong>
        </a>
        <a class='button is-light' id='burger-log-in'>
            <strong>Log in</strong>
        </a>
    </div>

    <div class='card'>
        <div class='field' id='enter-log-in-burger'>

        <form method='POST' action='loginuser.php'>
            <label class='label'>Username</label>
            <div class='control'>
                <input class='input' type='text' name='username' placeholder='User Name'>
            </div>

            <label class='label'>Password</label>
            <div class='control'>
                <input class='input' type='password' name='password' placeholder='Password'>
            </div>
            
            <label class='label'>
                <button class='button is-small control-log-in' type='submit'>
                    Log in
                </button>
                </label>

            </form>

        </div>
    </div>

    <u>Tools</u>
    <a class='navbar-item' href='monstermanual.php'>
        Monster Manual
    </a>
    <a class='navbar-item' href='encounterbuilder.php'>
        Encounter Builder
    </a>
</div>";
}

if ((isset($_SESSION['loggedin'])) && (!isset($_SESSION['admin']))) {

    echo "
    <nav class='navbar' role='navigation' aria-label='main navigation'>
    <div class='navbar-brand'>
        <a class='navbar-item' href='index.php'>
            <img src='https://i.imgur.com/lTvC0FW.png' width='112' height='28'>

        </a>

        <a role='button' class='navbar-burger' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>

            <a role='button' class='navbar-burger is-active' id='active-on-click' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
            </a>
        </a>
    </div>

    <div id='navbarBasicExample' class='navbar-menu'>
        <div class='navbar-start'>
            <a class='navbar-item' href='index.php'>Home</a>
            
            <div class='navbar-item has-dropdown is-hoverable'>

                <a class='navbar-link'>
                    GM Tools
                </a>

                <div class='navbar-dropdown'>

                    <a class='navbar-item' href='monstermanual.php'>
                        Monster Manual
                    </a>

                    <a class='navbar-item' href='encounterbuilder.php'>
                        Encounter Builder
                    </a>


                </div>

            </div>

            <a class='navbar-item' href='userprofile.php'>User Profile</a>

        </div>

        <div class='navbar-end'>

        <div class='navbar-item'>
        <div class='buttons has-addons is-right'>

            <a class='button is-light' id='log-in' href = 'logout.php'>
                <strong>Log Out</strong>
            </a>

        </div>
        </div>

        </div>

    </div>

</nav>

<!-- end of navbar-end -->

<div class='column is-one-fifth-mobile is-offset-10 log-in'>

    <div class='card'>
        <div class='field' id='enter-log-in'>

            <div class='navbar-item'>
                <div class='buttons has-addons is-right'>

                <a class='button is-light' id='log-in' href = 'logout.php'>
                    <strong>Log Out</strong>
                </a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of log in pop out-->

<div class='burger-expand'>
    <div class='buttons has-addons is-right' id='burger-register'>
    <a class='button is-light' id='log-in' href = 'logout.php'>
    <strong>Log Out</strong>
</a>
    </div>

    <u>Tools</u>
    <a class='navbar-item' href='monstermanual.php'>
        Monster Manual
    </a>
    <a class='navbar-item' href='encounterbuilder.php'>
        Encounter Builder
    </a>

    <u>User</u>
    <a class='navbar-item' href='userprofile.php'>User Profile</a>
</div>";
}


if (isset($_SESSION['admin'])) {
    echo "
    <nav class='navbar' role='navigation' aria-label='main navigation'>
    <div class='navbar-brand'>
        <a class='navbar-item' href='index.php'>
            <img src='https://i.imgur.com/lTvC0FW.png' width='112' height='28'>

        </a>

        <a role='button' class='navbar-burger' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>

            <a role='button' class='navbar-burger is-active' id='active-on-click' aria-label='menu' aria-expanded='false' data-target='navbarBasicExample'>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
                <span aria-hidden='true'></span>
            </a>
        </a>
    </div>

    <div id='navbarBasicExample' class='navbar-menu'>
        <div class='navbar-start'>
            <a class='navbar-item' href='index.php'>Home</a>
            <a class='navbar-item' href='admin/admin.php'>Admin</a>
            <div class='navbar-item has-dropdown is-hoverable'>

                <a class='navbar-link'>
                    Admin Tools
                </a>

                <div class='navbar-dropdown'>

                    <a class='navbar-item' href='admin/createmonster.php'>
                        Create Monster
                    </a>

                    <a class='navbar-item' href='admin/admin.php'>
                    Update Monster
                    </a>

                    <a class='navbar-item' href='admin/admin.php'>
                        Delete Monster
                    </a>
                    
                </div>

            </div>

            

        </div>

        <div class='navbar-end'>

            <div class='navbar-item'>
                <div class='buttons has-addons is-right'>

                    <a class='button is-light' id='log-in' href='logout.php'>
                        <strong>Log Out</strong>
                    </a>

                </div>
            </div>

        </div>

    </div>

</nav>

<!-- end of navbar-end -->

<div class='column is-one-fifth-mobile is-offset-10 log-in'>

    <div class='card'>
        <div class='field' id='enter-log-in'>

            <div class='navbar-item'>
                <div class='buttons has-addons is-right'>

                    <a class='button is-light' id='log-in' href='logout.php'>
                        <strong>Log Out</strong>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of log in pop out-->

<div class='burger-expand'>
    <div class='buttons has-addons is-right' id='burger-register'>
        <a class='button is-light' id='log-in' href='logout.php'>
            <strong>Log Out</strong>
        </a>
    </div>

    <u>Tools</u>
    <a class='navbar-item' href='admin/createmonster.php'>
        Create Monster
    </a>

    <a class='navbar-item' href='admin/admin.php.php'>
        Update Builder
    </a>

    <a class='navbar-item' href='admin/admin.php'>
        Delete Builder
    </a>

    <u>admin</u>
    <a class='navbar-item' href='admin/admin.php'>Admin</a>
</div>";
}
