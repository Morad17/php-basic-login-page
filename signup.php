<?php
    include 'header.php';
?>

<section class="signup-section">
    <h2>Sign Up</h2>
    <form class="signup-form" action="data/signup-data.php" method="POST">
        <input type="text" name="fullname" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password_retype" name="password_retype" placeholder="Retype Password">
        <button class="submit-button" type="submit" name="submit">Sign Up</button>
    </form>
    <?php
        if(isset($_GET["error"])){

            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all the fields!</p>";
            }
            else if ($_GET["error"] == "invalidusername") {
                echo "<p>Username invalid, Choose another one!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Email invalid, Choose another one!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords Dont Match!</p>";
            }
            else if ($_GET["error"] == "usernamertaken") {
                echo "<p>Username already Taken!</p>";
            } 
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have successfully signed up!</p>";
            } 
        }
    ?>


</section>

