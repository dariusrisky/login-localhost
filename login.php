<?php
    session_start();
    $fail=0;
    // ... rest of your PHP code ...

    if (isset($_POST["button"])) {
        include "database/database.php";

        $button = $_POST['button'];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $login = "SELECT * FROM users where username ='$username' and password='$password'";
        $all = $username && $password;

        $result = mysqli_query($db, $login);

        if (empty($username) && empty($password) || empty($password) || empty($username)) {
            echo "username and password cannot be empty!!";
            die;
        }

        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                echo "login berhasil";
                $_SESSION["username"] = $username;
                header('location: home.php');
                exit; // Add exit to stop further script execution
            } else {
                // echo "<br><strong><i>invalid data</strong></i>";
                $fail=1;
            }
        }
    }
?>

<!doctype html>
<html lang="en">

<!-- ... rest of your HTML code ... -->

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <link rel="icon" href="application/logo.icon" type="image/ico">
    <link rel="stylesheet" href="design/style.css">
</head>

<body>
    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <div class="signin">
            <div class="content">
                <h2>Login</h2>
                <div class="form">
                    <div class="inputBox">
                        <form action="login.php" method="post">
                            <input type="text" name="username" required> <i>Username</i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required> <i>Password</i>
                    </div>
                    <div class="links"> <a href="forgot.php">Forgot Password</a> <a href="signup.php">Sign Up</a>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Login" name="button"> </form>
                        <p><?php
                        if($fail){
                            echo  '<br> <br><strong style="color: red";>wrong username and password check again!';
                        }
                        ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html