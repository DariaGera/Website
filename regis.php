<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/stylereg.css"/>
<script type="text/javascript" src="js/minesing.js"></script>
</head>
<body>
  <?php
  require('connect.php');

  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($connection, $query);

    if($result){
      $smsg = "Регістрація була успішна";
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
  <a href="singin" id="log" >login</a>
  </div>

<form  method="POST">
  <?php if(isset($smsg)){ ?><div class="alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
  <?php if(isset($fsmsg)){ ?><div class="alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php }?>

 <fieldset>
   <legend>Реєстрація</legend>
   <pre>   Email</pre>
   <input type="email"  name="email" placeholder="Email" id="email" autofocus required>
   <pre>   Логин</pre>
   <input type="text"  name="username" placeholder="Username" id="name" required>
   <pre>   Пароль</pre>
   <input type="password"  name="password" placeholder="Password" id="pass" required>
   <br><br>
   <button  type="submit" onmouseover="validate();" style="margin-left: 100px;">Відправити</button>
 </fieldset>
</form>

<marquee scrollamount="25"
direction="right"
behavior="scroll" id="kek">
<img src="gif/tenor.gif" />
<img src="gif/tenor.gif" id="dog"/>
</marquee>

</body>
</html>
