<?php
    include 'dbh.php';

    $first = $_POST['user_first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['user_pwd'];

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$first', '$last', '$email', '$password');";

    mysqli_query($conn , $sql);

    header("Location: index.php?signup=success");

?>

<section>
    <h2>Sign Up</h2>
    <form class="signup-form" action="index.html">

    </form>
</section>

<!-- <form action="signup.php" Method="POST">
    <input type="text" name="user_first" placeholder="first name">
    <br>
    <input type="text" name="user_last" placeholder="last name">
    <br>
    <input type="text" name="user_email" placeholder="email">
    <br>
    <input type="text" name="user_pwd" placeholder="password">
    <br>
    <button type="submit">Sign Up</button>
</form> -->