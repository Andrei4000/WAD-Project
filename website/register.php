
<?php
include 'config.php';
if ($login == 1) {
echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
}else {
if (isset($_POST["u_btn"])) {
  $u_name = $_POST["u_name"];
  $u_email = $_POST["u_email"];
  $u_pass = $_POST["u_pass"];
  if (empty($u_name) || empty($u_email) || empty($u_pass) ) {
    echo "Please complet all Data";
  }else{
    $insert = mysqli_query($conn,"INSERT INTO `users` (`u_name`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");
    echo "Succes";
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>

<div class="header">
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-compass"></i>    </label>

    <ul class="menu">
        <a href="MainPage.php">Home</a>
        <a href="Login.php">Login</a>
        <a href="register.php">Register</a>
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
    </ul>
</div>


<div class="content">
    <center>
        <div class="register-box">
            <h1>New here? Register Here!</h1>
            <form action="register.php" method="post">
            <i class="fas fa-user"></i>
              <label>Name</label>
              <input type="text" name="u_name" value=""><br />
              <br>
              <i class="fas fa-envelope"></i>
              <label>Email</label>
              <input type="email" name="u_email" value=""><br />
              <br>
              <i class="fas fa-lock"></i>
              <label>Password</label>
              <input type="password" name="u_pass" value=""><br />
              <input type="submit" name="u_btn" class="btn" value="Sign up"><br />

            </form>
        </div>
    </center>


</div>
</body>
</html>
<?php } ?>
