

<?php
    // get the data from the form
    $login_okay = 'x';
    $user_email = "";
    $user_password = "";
    session_start();

    if (count ($_POST) != 0) { 

        // $db = new PDO('mysql:host=localhost;dbname=beautyyy', 'root'," ", 'beautyyy');
        $db = new mysqli('localhost', 'root', '', 'beautyyy');
    
        $user_email = htmlspecialchars($_POST['user_email']);
        $user_password = htmlspecialchars($_POST['user_password']);

        $statement = $db->prepare("SELECT * FROM administrators WHERE email = ? ");
        $statement->bind_param('s', $user_email);
        $statement->execute();
        $admin = $statement->fetch();
        $statement->closeCursor();

        $login_okay = 'n';
        if (count ($admin) != 0) {
            if ($admin['password'] == $user_password) {
                $login_okay = 'y';
                $_SESSION['user_email'] = $user_email;
                $_SESSION['firstName'] = $admin['firstName'];
                $_SESSION['lastName'] = $admin['lastName'];
                
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Banner for tabs-->
	<title>Beauty</title>
	<link rel="stylesheet" type="text/css" href="website.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>

<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		  		</button>
				<a href="beautyPage.php" class="navbar-brand">ParLaur Beauty</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
                   <li><a href="home.php">Home</a></li>
					<li><a href="makeup.php">Makeup</a></li>
					<li><a href="lips.php">Lips</a></li>
					<li><a href="eyes.php">Eyes</a></li>
					<li><a href="brushes.php">Brushes</a></li>
					<li><a href="skinCare.php">Skin Care</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
			        <li><a href="cart.php?action=show_cart">Shopping Cart  <i class="fa fa-shopping-bag"></i></a></li>
			        <li><a href="Index.php">Login  <i class="fa fa-user"></i></a></li>
     			</ul>
			</div>
		</div>
	</nav>
	<!-- End Banner Tabs-->
	<br>
	<br>

	<div id="shoppingcart" class="jumbotron">
		<center><h1>Welcome Back, Beautiful <3</h1></center>
	</div>


<h1>Login</h1>
	
	<form action="Index.php" method="post">
	  <div class="form-group">
	    <label for="user_email">Email address</label>
	    <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Email" required>
	  </div>

	  <div class="form-group">
	    <label for="user_password">Password</label>
	    <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Password" required>
	  </div>

	  <button type="submit" class="btn btn-default">Login</button>

	  	<?php
		
		if ($login_okay == 'y') {
        	header ('Location: beautyPage.html');
            exit();
        } else if ($login_okay == 'n') {
            echo  "Error : Invalid credential, you must correctly login to view this site.";
        }
    ?> 
	</form>




</body>
</html>