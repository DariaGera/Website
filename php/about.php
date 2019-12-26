<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ABOUT US | Flash Skateshop</title>

<?php require 'assets/templates/header.php' ?>


	<?php
	if (isset($_POST['comment'])){
		$name = $_POST['comment_name'];
		$comment = $_POST['comment'];
		$page_id = $_POST['page_id'];

		$query = "INSERT INTO comments (page_id, username, value) VALUES ('$page_id', '$name', '$comment')";
		$result = mysqli_query($connection, $query);
	}
	?>


	<!-- Unique content for every page - info about 'team'-->
	<main class="main">
		<div class="container">
			<h1 class="page__name">About our store</h1>
			<p style="text-align: center;">Info about shop will appear soon</p>

			<h1 class="page__name">Comments</h1>
			<section class="comments">

				<?php
				$page_id = 1;
				$query = "SELECT * FROM comments WHERE page_id='$page_id' and checked=1";
				$result = mysqli_query($connection, $query);

				while ($row = $result -> fetch_assoc()) {
					echo "<div class='comment'><strong>";
					echo $row['username'];
					echo "</strong>: ";
					echo $row['value'];
					echo "</div>";
				}
				?>

			</section>


		<form method="POST" style="text-align: center;">
				<?php if(isset($_SESSION['username'])){
					echo "<h1>Leave us a comment, ";
					echo $_SESSION['username'];
					echo '!</h1><input type="hidden" name="comment_name" value="';
					echo $_SESSION['username'];
					echo '">';
				} else {
					echo '<h1>Leave us a comment!</h1>
				<section style="display: flex; justify-content: space-around;">
					<input class="comment__field" type="email" placeholder="Type your email">
					<input class="comment__field" type="text" placeholder="Type your name" name="comment_name" required>
				</section>';
				}
				?>
				<input type="hidden" name="page_id" value="1">
				<input id="comment__main__area" type="text" placeholder="Your comment..." name="comment" required>
				<br>
				<button type="submit" id="comment__button">Submit</button>
			</form>
		</div>
	</main>


<?php require 'assets/templates/footer.php'?>
