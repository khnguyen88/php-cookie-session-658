<?php 
    session_start();
    if(!isset($_SESSION["loggedIn"])){
        $_SESSION["loggedIn"] = "false";
    }

    $username = "CIS658";
    $password = "WebArchitectures";

    if(isset($_GET['username']) && isset($_GET['password'])){
        if ($username == $_GET['username'] && $password == $_GET['password']){
            $_SESSION["loggedIn"] = "true";
        }
        else{
            $_SESSION["loggedIn"] = "false";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php
            if(isset($_COOKIE["displayMode"])){
                if($_COOKIE["displayMode"] == "light"){
                    echo '<link rel="stylesheet" href="./styles/light.css">';
                }
                if($_COOKIE["displayMode"] == "dark"){
                    echo '<link rel="stylesheet" href="./styles/dark.css">';
                }

            }
            else{
                echo '<link rel="stylesheet" href="./styles/light.css">';
            }
        ?>
    </head>

    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Cookie's Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" ></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- Home Link / PHP -->
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                        </li>

                        <!-- Login/Logout Link / PHP -->
                        <li class="nav-item">
                        <a class="nav-link active" href="./login.php">
                            <?php echo($_SESSION["loggedIn"]=="true") ? "Logout" : "Login"?>
                        </a>
                        </li>

                        <!-- Preference Link / PHP -->
                        <li class="nav-item">
                            <?php
                                if ($_SESSION["loggedIn"]=="true"){
                                    echo '<a class="nav-link" href="./preferences.php">Preferences</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-container">
            <h1 class="page-header">Login Page</h1>

            <!-- Form -->
            <div class="form-container">
                <form action="#" method="get">
                    <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">            
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">            
                    </div>
                    <button name="submit" class="btn btn-primary" type="submit" value="">Submit!</button> 
                </form>
            </div>

            <div class="message-container">
                <?php
                        if(isset($_GET['username']) && isset($_GET['password'])){
                            if ($username == $_GET['username'] && $password == $_GET['password']){
                                echo '<p class="good-message">You have successfully logged in!</p>';
                            }
                            if (($username != $_GET['username'] || $password != $_GET['password']) && ($_GET['username'] != "" && $_GET['password'] != "")){
                                echo '<p class="bad-message">You have entered the wrong username and/or password!</p>';
                            }
                            if ($_GET['username'] == "" || $_GET['password'] == ""){
                                echo '<p class="bad-message">Either username and/or password is missing! Please fillout both inputs!</p>';
                            }
                        }
                ?>
            </div>
        </div>

    </body>
</html> 