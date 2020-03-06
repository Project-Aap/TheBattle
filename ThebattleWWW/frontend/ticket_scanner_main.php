<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Scanner pagina</title>
	<link rel="stylesheet" href="css/ticket_style.css">
</head>
<body>
	<?php
		if(isset($_SESSION["checkAccess"]))
		{
			if($_SESSION["checkAccess"])
			{
				echo '<div class="greenBackground background">';
				echo "<h1>". $_SESSION['personName'] . " heeft aangemeld.</h1>";
			}
			else if ($_SESSION["checkAccess"] == false)
			{
				echo '<div class="redBackground background">';
				echo "<h1>Niet aangemeld.</h1>";
			}
		} else {
			echo '<div class="normalBackground background">';
			echo "<h1>Welkom op de ticket scanner pagina.</h1>";
		}
		session_destroy();
	?>
		<form action="backend/tickethandler.php" method="POST">
			<div>
				<input name="text" type="text" id="text" value="" autofocus required placeholder="Make sure you have this selected">
			</div>
		</form>
	</div>
</body>
</html>