<!doctype html>
<?php
session_start();
?>

<html>
<title>URL Shortner</title>
<head>
<link href="main.css" rel='stylesheet' type='text/css'/>
</head>
<body>
<section class="webdesigntuts-workshop">

	<?php
	if(isset($_SESSION['feedback'])) {
		echo "<p>{$_SESSION['feedback']}</p>";
		unset($_SESSION['feedback']);
	}
	?>

	<form action="shorten.php" method="post">		    
		<input type="url" name="url" placeholder="Enter your URL..." autocomplete="off">		    	
		<button type="submit" value="Shorten">Search</button>
	</form>
</section>
</body>
</html>