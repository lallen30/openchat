<?php include 'includes/connect.php'; ?>
<?php
	//Create select query
$query = "SELECT * FROM chats ORDER by id DESC";
$chats = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>OpenChat</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
		<header>
			<h1>Chat Box</h1>
		</header>
		<div id="chats">
			<ul>
			<?php while($row = mysqli_fetch_assoc($chats)) : ?>
				<li class="chat"><span><?php  echo $row['time']; ?> - </span><strong><?php echo $row['user']; ?></strong>: <?php echo $row['message']; ?> </li>
			<?php endwhile; ?>
			</ul>
		</div>
		<div id="input">
		<?php if(isset($_GET['error'])) : ?>
			<div class="error"><?php echo $_GET['error']; ?></div>
		<?php endif; ?>
			<form method="post" action="submit.php">
				<input type="text" name="user" placeholder="Enter Your Name" />
				<input type="text" name="message" placeholder="Enter A Message" />
				<br />
				<input class="chat-btn" type="submit" name="submit" value="Send to Chat" />
			</form>

		</div>

	</body>
