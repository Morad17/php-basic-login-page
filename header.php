<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <title>Welcome</title>
</head>
<body>
    <nav>
        <ul class="header-nav">
            <li>
                <a class="nav-link logo" href="">Logo</a>
            </li>
            <li>
                <a class="nav-link" href="">Home</a>
                <a class="nav-link" href="">About Me</a>
                <a class="nav-link" href="">Find Blog</a>
                 <?php
                    if(isset($_SESSION["username"])) {
                        echo "<a class='nav-link' href='profile.php'>Profile Page</a>";
                        echo "<a class='nav-link' href='data/logout-data.php'>Log Out</a>";
                    } else {
                        echo "<a class='nav-link' href='signup.php'>Sign Up</a>";
                        echo "<a class='nav-link' href='login.php'>Login</a>";
                    }
                 ?>
            </li>
        </ul>
    </nav>    


</body>
</html>