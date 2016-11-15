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
			<li>Row for submitted chat info</li>
			</ul>		
		</div>
		<div id="input">
		
			<div class="errormsg">some error here</div>
		<!-- Form to submit to the rows above -->
			<form method="post" action="submit.php">
				<input type="text" name="firstname" placeholder="First Name" />
				<input type="text" name="message" placeholder="Message" />
				<br />
				<input class="chat-btn" type="submit" name="submit" value="Send to Chat" />
			</form>

		</div>

	</body>