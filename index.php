<!-- Following demo + W3School, how to set cookies -->
<?php 
    $cookie_name= "displayMode";
    $cookie_value= "red";
    // Set cookies for 5 minutes, 60 seconds * (5 min / seconds)
    setcookie($cookie_name, $cookie_value, time() + (60 * 5), "/");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
        <!-- Use to test out style changes and PHP ternary operator -->
        <style>
            body{
                color: <?php echo((isset($_COOKIE[$cookie_name])) ? "{$_COOKIE[$cookie_name]}" : "blue"); ?>;
            }
        </style>
    </head>
    <body>
    <!-- Render out HTML elements and texts in PHP based on Cookie -->
    <?php
                if(!isset($_COOKIE[$cookie_name])){
                    echo "<p> Cookie named, {$cookie_name}, is not set! </p>";
                }
                else{
                    echo "<p> Cookie name, {$cookie_name}, is set! </p>";
                    echo "<p> Cookie named {$_COOKIE[$cookie_name]} is set! </p>";
                }
            ?>
        <section class="blog-container">
            <h2>Personal Blog</h2>
            <div class="entry-contrainer">
                <div class="title-container">
                    <h3>Hi There</h3>
                </div>
                <div class="date-container">
                    <h4>2023-03-29</h4>
                </div>
                <div class="content-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum provident commodi voluptatem recusandae est tempore officia non natus veritatis obcaecati quibusdam quasi mollitia nam sunt quam, reprehenderit aspernatur optio rerum porro fuga, modi eum deleniti ex. Facilis delectus est, dicta exercitationem quae nesciunt veritatis excepturi fuga. Assumenda, adipisci quisquam vitae suscipit veritatis laborum harum voluptas doloremque reprehenderit tenetur sit, odit quae nostrum inventore numquam doloribus. Voluptatum mollitia qui dicta minus odio neque quisquam ducimus sint? Fugiat voluptate temporibus porro consequuntur fugit tempore! Harum odit neque saepe doloremque incidunt nobis, quo culpa? Error ducimus, itaque facere delectus iste harum, in alias perferendis earum, ipsum recusandae consequuntur. Qui dolore tempore fuga laudantium similique. Hic temporibus magni cum quam cumque, numquam repellat quae, culpa corporis aspernatur odio natus quasi deserunt dolores, ratione facilis velit! Nihil quibusdam voluptatibus aliquid quidem minus cumque aliquam similique suscipit quasi veniam quo vitae quos repellendus architecto impedit dolor commodi cupiditate voluptatem, maiores illo laudantium veritatis. Consectetur architecto minima eveniet sit ratione alias totam nesciunt laborum itaque dolorem consequatur, debitis dolorum quo repellendus nostrum unde provident officia esse eum fugit sapiente? Aperiam quidem fuga temporibus perferendis, ullam animi! Neque vero quo praesentium iure eveniet earum sed at facilis ex tempore quam voluptate nulla asperiores, expedita quidem, minima obcaecati totam perspiciatis placeat aut excepturi cum voluptatum aliquam nihil? Cupiditate deleniti quisquam ipsam dolore earum odio, facere fugit nostrum odit blanditiis voluptates beatae id itaque sit eaque, maiores recusandae? Nobis ad harum ipsum placeat? Optio temporibus cupiditate repellat, eius inventore cum corporis! Voluptate inventore maxime, necessitatibus natus ab excepturi id numquam, eligendi libero illum laboriosam vero consectetur. Rerum ipsa consequatur commodi laborum odio nisi quos consectetur, laudantium animi incidunt, dolore iusto obcaecati optio molestiae recusandae molestias. Assumenda iure quos voluptate quia dolore numquam vero illo atque dignissimos? Ab minima omnis corrupti!</p>
                </div>
            </div>
        </section>
    </body>
</html> 