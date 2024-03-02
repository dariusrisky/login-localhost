<?php
session_start();
include 'database/database.php';
$success=0;
$fail=0;

if (isset($_POST['update-password'])) {
    $new_password = $_POST['new-password'];
    $confirmed_password = $_POST['confirm-password'];

    if ($new_password == $confirmed_password) {
        $username = $_SESSION["username"];
        $update_query = "UPDATE users SET password = '$new_password' WHERE username = '$username'";
        $result = mysqli_query($db, $update_query);

        if ($result) {
            // echo "Password updated successfully please to <a href='login.php'> login page</a>.";
            $success=1;
            session_unset();
            session_destroy();
        } else {
            // echo "Password update failed. Please try again.";
            $fail=1;
        }
    } else {
        // echo "Passwords do not match. Please enter matching passwords.";
        $fail=1;
    }
}
?>
<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="design/style.css">
</head>

<body>
    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <div class="signin">
            <div class="content">
                <h2>Confirm You Password</h2>
                <div class="form">
                    <div class="inputBox">
                        <form action="forgot2.php" method="post">
                            <input type="password" name="new-password" required> <i>New Password</i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="confirm-password" required> <i>Confirm Password</i>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Confirm" name="update-password"> </form> <br>
                        <p><?php
                        if ($fail==1) {
                            echo '<br>  <strong style="color: red";>!Passwords do not match. Please enter matching passwords.';
                        }
                        if ($success==1) {
                            echo '<br> <br><strong style="color: green";>Youre Password Updated go to <a href="login.php" id="login">login page';
                        }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html