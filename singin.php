<!DOCTYPE html>
<html>
<head>
<title>Entrance</title>
<link rel="stylesheet" href="css/stylesing.css"/>
<script type="text/javascript" src="js/minesing1.js"></script>
</head>
<body>
  <?php
    session_start();
    require('connect.php');

    if(isset($_POST['username']) and isset($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
      $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
      $count  = mysqli_num_rows($result);

      if($count == 1) {
        $_SESSION['username'] = $username;
      } else {
        $fmsg = "Помилка";
      }
  }
  ?>


  <div style="height: 0px">
  <h1>Жанри літератури Японії</h1>
  </div>
  <div id="first">
  <a href="index" id="main">Головна</a>
  </div>
  <div id="second">
  <a href="regis" id="log" >Registration</a>
  </div>

<form method="POST">
  <?php if(isset($smsg)){ ?><div class="alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
  <?php if(isset($fsmsg)){ ?><div class="alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php }?>

  <fieldset>
    <legend>Вхід</legend>
    <pre>Логін</pre>
    <input type="text"  name="username" placeholder="Username" id="name" autofocus required>
    <pre>Пароль</pre>
    <input type="password"  name="password" placeholder="Password" id="pass" required>
    <br><br>
    <button type="submit" onmouseover="validate();" style="margin-left: 100px;">Відправити</button>
  </fieldset>
</form>
<?php
if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "<p>Hello, " . $username . ", ви увійшли</p>";
  echo "<a href='logout' id='out'>Logout</a>";
}
?>
<marquee scrollamount="20"
direction="left"
behavior="scroll">
<img src="gif/girl.gif" />
</marquee>

</body>
</html>
