<?php 
    include "header.php"
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="home-section">
        <?php
            if(isset($_SESSION["username"])) {
                echo "<p>Hello there".$_SESSION["username"]."</p>";
            }
                 ?>
        </section>
    </body>
</html>