<html>
	<head>
		
	</head>
    <body>
	<?php
		print "Thanks " . $_POST["firstName"] . " " . $_POST["lastName"] . " for making a purchase with us!!<br>";
		
		print "Your package will ship to " . $_POST["address"] . " " . $_POST["city"] . " " . $_POST["state"] . " " . $_POST["zip"] . ". <br>";
		
		print "You will receive info about your purchase in your e-mail, " . $_POST["email"] . "!   <br>";
		
		print "If anything happens to your purchase, we can reach you at " . $_POST["phone"] . ".  <br>";
		
		print "Thanks again for shopping with us! Seeya soon Beauty Lover! ";

	?>

	<p><a href="beautyPage.html">To go back to the main page, click this link!</a></p>		
	</body>
</html>