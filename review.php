<!DOCTYPE html>
<html>
<head>
<title>Review</title>
<link rel="stylesheet" href="css/stylerev.css"/>
<script type="text/javascript" src="js/modiv.js"></script>
</head>
<body>
	<img src="gif/giphy.gif" id="cat3" onclick="cat2();"/>
	<div id="first">
	<a href="index" id="main">Головна</a>
	</div>
	<h1 onclick="secret();">Відгук</h1>
	<h2>Напишіть, будь ласка, відгук або побажання до нашого сайту</h2>

	<?php
	session_start();
	require('header.php');

	if (isset($_POST['comment'])){
		$name = $_POST['name'];
		$comment = $_POST['comment'];

		$query = "INSERT INTO users (name, comment) VALUES ('$name', '$comment')";
		$result = mysqli_query($connection, $query);
	}
	?>

<?php
$query = "SELECT * FROM users WHERE checked=1";
$result = mysqli_query($connection, $query);
?>


<form method="POST" style="text-align: center;">
	<?php
	if(isset($_SESSION['username'])){
		echo "<h2>Leave us a comment, ";
		echo $_SESSION['username'];
		echo '!</h2><input type="hidden" name="name" value="';
		echo $_SESSION['username'];
		echo '">';
	} else {
	  header("Location: singin");
	}
	?>
	<input id="text" type="text" placeholder="Your comment..." name="comment" required>
	<br>
	<button type="submit" id="comment__button">Submit</button>
</form>

<img src="gif/giphy.gif" id="cat1" onclick="cat3();"/>
<img src="gif/giphy.gif" id="cat2" onclick="cat1();"/>


</body>
</html>
