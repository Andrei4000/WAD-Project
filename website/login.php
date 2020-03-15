<?php
include 'config.php';

if ($login == 1) {
echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
}else {




if (isset($_POST["u_btn"])) {
  $u_email = $_POST['u_email'];
  $u_pass = $_POST['u_pass'];
  if (empty($u_email) || empty($u_pass)) {
    echo "Please Complet all data";
  }else{
    $selectfdb = mysqli_query($conn,"SELECT * FROM users WHERE u_email = '$u_email' AND u_pass = '$u_pass'");
    $row = mysqli_fetch_array($selectfdb);
    if ($row["u_email"] == $u_email && $row["u_pass"] == $u_pass) {

      setcookie('uid',$row["u_id"],time()+(3600 * 24));
      setcookie('login',1,time()+(3600 * 24));
      echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
    }else {
      echo "Email or Password Incorrect";
    }
  }
}
 ?>

<!DOCTYPE html>
<meta http-equiv="refresh" content="0"; url=profile.php
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
        <a href="Register.php">Register</a>
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
    </ul>
</div>


<div class="content">
    <center>
        <div class="login-box">
          <form  action="login.php" method="post">
            <i class="fas fa-user"></i>
            <label >Email</label>
            <input type="email" name="u_email" value=""><br />
            <br>
            <i class="fas fa-lock"></i>

            <label >Password</label>
            <input type="password" name="u_pass" value=""><br />
            <input type="submit" name="u_btn" class="btn" value="Sign in"><br />
          </form>

        </div>
    </center>


</div>
</body>
</html>

<?php } ?>
