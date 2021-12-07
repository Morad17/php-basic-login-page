<?php
include 'header.php'
?>

<section class="signup-section">
    <h2>Login</h2>
    <form class="signup-form" action="data/login-data.php" method="POST">
        <input type="text" name="username" placeholder="Username/Email">
        <input type="password" name="password" placeholder="Password">
        <button class="submit-button" type="submit" name="submit">Login</button>
    </form>
    <?php
        if(isset($_GET["error"])){

            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all the fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect Login info!</p>";
            }
        }
    ?>
</section>