<?php
session_start();

if(isset($_SESSION['email'])){
    echo "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Home</title>
        <link rel='stylesheet' href='./styles/dashboard.css'>
        <script src='./scripts/dashboard.js'></script>
    </head>
    
        <body>
            <div class='container'>
                <header>
                    <img src='./img/bug-512.png' alt='Image of lady bug logo'>
                    <h1>BugMe Issue Tracker</h1>
                </header>
    
                <aside>
                    <section class='link'>
                        <img src='./img/icons8-home-24.png' alt=''>
                        <a href='dashboard.php'>Home</a>
                    </section>
    
                    <section class='link'>
                        <img src='./img/icons8-add-user-male-30.png' alt=''>
                        <a href='newuser.php'>Add User</a>
                    </section> 
    
                    <section class='link'>
                        <img src='./img/icons8-add-30.png' alt=''>
                        <a href=''>New Issue</a>
                    </section> 
    
                    <section class='link'>
                        <img src='./img/icons8-shutdown-24.png' alt=''>
                        <a href='logout.php'>Logout</a>
                    </section> 
                </aside>
    
                <main>
    
                    <div class='page-top'>
                        <h2>Issues</h2>
    
                        <div>
                            <button id='createBtn'>Create New Issue</button>
                        </div>
                    </div>
    
                    <div class='selectors'>
                        <p>Filter By: </p>
    
                        <div class='selector-buttons'>
                            <button id='all' class='filterBtn'>ALL</button>
                            <button id='open' class='filterBtn'>OPEN</button>
                            <button id='myticket' class='filterBtn'>My Ticket</button>
                        </div>
                    </div>
    
                    <div id = 'show'></div>
                </main>
            </div>
        </body>
    </html>";
}else{
    require 'login.html';
}
?>