<?php
include 'config.php';
if ($login == 0) {
  echo " <meta http-equiv='refresh' content='0; url=login.php'>";
}else {
$u_id = $_COOKIE['uid'];
$getinfo = mysqli_query($conn,"SELECT * FROM users WHERE u_id = $u_id ");
$arr = mysqli_fetch_array($getinfo);
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
      <a href="MainPageCopy.php">Home</a>
      <a href="logout.php">Logout</a>
        <a href="profile.php">Profile</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>


<div class="content">
    <center>
      Name : <?php echo $arr['u_name']; ?><br>
      Email : <?php echo $arr['u_email']; ?><br>
      User ID : <?php echo $arr['u_id']; ?><br>

    </center>

    <p>

    </p>
    </div>
  </body>
</html>



<?php } ?>
