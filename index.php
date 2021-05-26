<!DOCTYPE html>
<html>
	<head>
		<title>PHP Demo May 6th</title>
	</head>
	<body>
		<h1>Good afternoon!</h1>
		<p>My self name is: <?php echo $_SERVER["PHP_SELF"]; ?></p>
		<p>My user agent (browser) is: <?php echo $_SERVER["HTTP_USER_AGENT"]; ?></p>
		<hr>
		<p>You passed me <?php echo count($_GET); ?> variables...
		<?php
			if(count($_GET) > 0) 
			{
				print("and they are...");
		?>
				<ul> 
				<?php 
					foreach( $_GET as $varname => $varvalue )
					{
						echo "<li>" . $varname . " : " . $varvalue . "</li>";
					}
			   ?>
				</ul>
		<?php
			}
		?>
	</body>
</html>
