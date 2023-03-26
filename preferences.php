<?php
    session_start();
    if(!isset($_SESSION["loggedIn"])){
        $_SESSION["loggedIn"] = "false";
    }

    $cookie_name= "displayMode";
    
    if(isset($_GET['displayMode'])){
        if($_GET['displayMode'] == "light"){
            // 86400 = 1 day, We set the cookies for 3 days
            setcookie($cookie_name, "light", time() + (86400  * 3), "/");

            // Refreshes page after setting cookie(s)
            header("Location: ./preferences.php");
        }
        if($_GET['displayMode'] == "dark"){
            // 86400 = 1 day, We set the cookies for 3 days
            setcookie($cookie_name, "dark", time() + (86400  * 3), "/");

            // Refreshes page after setting cookie(s)
            header("Location: ./preferences.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Preferences Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                if($_COOKIE[$cookie_name] == "light"){
                    echo '<link rel="stylesheet" href="./styles/light.css">';
                }
                if($_COOKIE[$cookie_name] == "dark"){
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
                        <a class="nav-link" href="./login.php">
                            <?php echo($_SESSION["loggedIn"]=="true") ? "Logout" : "Login"?>
                        </a>
                        </li>

                        <!-- Preference Link / PHP -->
                        <li class="nav-item">
                            <?php
                                if ($_SESSION["loggedIn"]=="true"){
                                    echo '<a class="nav-link active" href="./preferences.php">Preferences</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-container">
            <?php 
                if($_SESSION["loggedIn"]=="true"){
                    echo '<h1 class="page-header">Preference Page</h1>';
                    echo '<div class="form-container">';
                        echo '<h2>What color theme would you like to apply to this site?</h2>';
                        echo '<form action="#" method="get">';
                                echo '<div class="mb-3">';
                                echo '<label for="lightMode" class="form-label">Light Mode: </label>';
                                echo '<br>';
                                echo '<button name="displayMode" class="btn btn-primary" type="submit" value="light" id="lightMode">Light Mode!</button>';            
                                echo '</div>';
                                echo '<div class="mb-3">';
                                echo '<label for="darkMode" class="form-label">Dark Mode: </label>';
                                echo '<br>';
                                echo '<button name="displayMode" class="btn btn-primary" type="submit" value="dark" id="darkMode">Dark Mode!</button>';   
                        echo '</form>';
                    echo '</div>';
                }
                else{
                    echo '<h1 class="page-header">ERROR! YOU ARE NOT AUTHORIZED TO BE HERE!</h1>';
                }
                
            ?>

        </div>

    </body>
</html> 