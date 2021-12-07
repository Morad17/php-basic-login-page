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

</section>

<?php
if(isset($_GET["error"])){

    if($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all the fields!</p>";
    }
    else if ($_GET["error"] == "invalid")
}


?>