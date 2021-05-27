<?php
echo "
<nav class='navbar' role='navigation' aria-label='main navigation'>
    <div class='navbar-brand'>
        <a class='navbar-item' href='../index.php'>
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
            <a class='navbar-item' href='../index.php'>Home</a>
            <a class='navbar-item' href='admin.php'>Admin</a>
            <div class='navbar-item has-dropdown is-hoverable'>

                <a class='navbar-link'>
                    Admin Tools
                </a>

                <div class='navbar-dropdown'>

                    <a class='navbar-item' href='createmonster.php'>
                        Create Monster
                    </a>

                    <a class='navbar-item' href='admin.php'>
                    Update Monster
                    </a>

                    <a class='navbar-item' href='admin.php'>
                        Delete Monster
                    </a>
                    
                </div>

            </div>

            

        </div>

        <div class='navbar-end'>

            <div class='navbar-item'>
                <div class='buttons has-addons is-right'>

                    <a class='button is-light' id='log-in' href='../logout.php'>
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

                    <a class='button is-light' id='log-in' href='../logout.php'>
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
        <a class='button is-light' id='log-in' href='../logout.php'>
            <strong>Log Out</strong>
        </a>
    </div>

    <u>Tools</u>
    <a class='navbar-item' href='createmonster.php'>
        Create Monster
    </a>

    <a class='navbar-item' href='admin.php'>
        Update Builder
    </a>

    <a class='navbar-item' href='admin.php'>
        Delete Builder
    </a>

    <u>admin</u>
    <a class='navbar-item' href='admin.php'>Admin</a>
</div>";
