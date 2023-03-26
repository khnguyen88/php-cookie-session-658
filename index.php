<?php 
    session_start();
    if(!isset($_SESSION["loggedIn"])){
        $_SESSION["loggedIn"] = "false";
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
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
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
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
            <h1 class="page-header">Home Page</h1>
            <!-- Blog Content -->
            <section class="blog-container">
                <!-- Blog Title -->
                <h2 class="page-subheader">Personal Blog</h2>

                <!-- Blog Entries -->
                <!-- Article 1 -->
                <article class="article-container">
                    <div class="title-container">
                        <h3>Hello There</h3>
                    </div>
                    <div class="date-container">
                        <h4>2023-03-29</h4>
                    </div>
                    <div class="content-container">
                        <p>General Kenobi recognized a few weeks ago. He said "Hello, there!" and it made my day. I haven't seen him in a while since that whole Order 66 fiasco, but I hope he's okay.</p>

                        <p>The empire called the jedi folks traitors, but I think they're alright. Though, I do keep my mouth shut, don't want be force chocked and all, you know?</p>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="article-container">
                    <div class="title-container">
                        <h3>Where's My Lasanga, Jon?!</h3>
                    </div>
                    <div class="date-container">
                        <h4>2023-03-24</h4>
                    </div>
                    <div class="content-container">
                        <p>Jon had the audacity to eat my lasanga that I saved for myself. It had my name on it in the fridge. How rude! When I confronted him about it, he promised me he would buy me a new tray right away.</p>

                        <p>Well it's been two hours, Jon!! Where's my lasanga? This cat's gotta eat. </p>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="article-container">
                    <div class="title-container">
                        <h3>Peanut Butter</h3>
                    </div>
                    <div class="date-container">
                        <h4>2023-03-22</h4>
                    </div>
                    <div class="content-container">
                        <p>I often wonder why we call peanut butter, well "peanut butter." There's like no butter in it!! The branding is a lie!! It's just peanuts!!</p>
                    </div>
                </article>
            </section>
        </div>
    </body>
</html> 