<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>sign up page</title>
    <link rel="icon" href="application/logo.icon" type="image/ico">
  <link rel="stylesheet" href="design/style.css">
</head>

<body>
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <div class="signin">
      <div class="content">
        <h2>Sign Up</h2>
        <div class="form">
          <div class="inputBox">
            <form action="signup.php" method="post">
              <input type="text" name="username" required> <i>Username</i>
          </div>
          <div class="inputBox">
            <input type="password" name="password" required> <i>Password</i>
          </div>
          <div class="links"> <a href="index.php">Home Page</a> <a href="login.php">Login Page</a>
          </div>
          <div class="inputBox">
            <input type="submit" value="Sign Up" name="button"> </form>
            <?php
            include "database/database.php";
            $success = 0;
            $fail = 0;

            if (isset($_POST["button"])) {
              $username = $_POST["username"];
              $password = $_POST["password"];
              $Query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
              $useralready = "SELECT username FROM users where username='$username'";
              $isi = mysqli_query($db, $useralready);

              if (empty($username) && empty($password)  || empty($password) || empty($username)) {
                echo "username and password cannot be empty!!";
                die;
              }



              if ($isi) {
                $num = mysqli_num_rows($isi);
                if ($num > 0) {
                  echo '<br> <br><strong style="color: red";>user already exits';
                  $fail = 1;
                } else {
                  if ($db->query($Query) === TRUE) {
                    $success = 1;
                    echo '<br> <br><strong style="color: green";>Signup successful. You can now log in to the <a href="login.php" id="login">login page.';
                  }
                }
              };

              $db->close();
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>