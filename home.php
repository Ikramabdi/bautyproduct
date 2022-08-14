<!DOCTYPE html>
<html>
<head>
	<title>Makeup</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="website.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
</head>
<!-- Banner for tabs-->
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
				<a href="beautyPage.html" class="navbar-brand"> Beauty cosmetics</a>
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
			        <li><a href="cart_view.php">Shopping Cart  <i class="fa fa-shopping-bag"></i></a></li>
			        <li><a href="index.php">Login  <i class="fa fa-user"></i></a></li>
     			</ul>
			</div>
		</div>
	</div>

	</nav> 

	<!-- End Banner Tabs-->
		
	
<section class="home" id="home">

    <div class="slide active" style="background:url(home-bg-2.jpg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>forever <br> beautiful</span>
        <h3>Beauty is about enhancing what you have. Let yourself shine through! </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>

    <div class="slide" style="background:url(home-bg-2.jpg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>forever <br> beautiful</span>
        <h3>Your skin is your best accessory.
			Take good care of it </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>

    <div class="slide" style="background:url(home-bg-2.jpg) no-repeat; background-size:cover; 
    background-position: center;">
    <div class="content">
        <span>forever <br> beautiful</span>
        <h3>Money cant buy happiness...<br>
			But it can buy Makeup!
            <br>
            </h3>
         <a href="#" class="btn">read more</a>  
    </div>
    </div>
     
    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
    
</section>


<!-- home section ends -->

<!-- category section starts -->

<section class="category">
    <div class="box-container">

        <a href="#" class="box">
            <img src="image/product-6.jpg">

            <h3>skincare</h3>
        </a>

        <a href="#" class="box">
            <img src="image/category-2.png">

            <h3>lips</h3>
        </a>

        <a href="#" class="box">
            <img src="image/category-3.png">
            <h3>hair</h3>
        </a>

        <a href="#" class="box">
            <img src="image/product-5.jpeg">

            <h3>eye</h3>
        </a>

        <a href="#" class="box">
            <img src="image/product-1.jpg">

            <h3>makeup</h3>
        </a>

        <a href="#" class="box">
            <img src="image/product-2.jpeg">

            <h3>fragrance</h3>
        </a>

    </div>
</section>
<!-- category section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <div class="img">
        <img src="image/home-bg-2.jpg" alt="">
    </div>
    <div class="content">
        <div class="box">
            <h3>About <span>Us...</span></h3>
            <p> BEAUTY COSMETICS is a total beauty company with its role to Provide beauty solution 
				and is reaching out to its customers through overseas markets. With its beauty business
				 platform, BEAUTY COSMETICS develops and Provides brand products to satisfy the client’s needs.
				  In order to enlarge the beauty business.</p>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-address-card"></i>
                <p>address card</p>
            </div>
            <div class="icons">
                <i class="fas fa-award"></i>
                <p>award cards</p>
            </div>
            <div class="icons">
                <i class="fas fa-gift"></i>
                <p>gift cards</p>
            </div>
        </div>
    </div>
</section>

<!-- about section ends -->


<!-- services section ends -->


<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
            <a class="link" href="#about"> <i class="fas fa-angle-right"></i> Makeup</a>
            <a class="link" href="#shop"> <i class="fas fa-angle-right"></i> lips</a>
            <a class="link" href="#gallery"> <i class="fas fa-angle-right"></i> brushes</a>
            <a class="link" href="#message"> <i class="fas fa-angle-right"></i> eyes</a>
            <a class="link" href="#blogs"> <i class="fas fa-angle-right"></i> skincare</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my favorite </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> private policy </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +252 613492628 </a>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +252 614949878 </a>
            <a class="link" href="#"> <i class="fas fa-envelope"></i> sadia@gmail.com </a>
			<a class="link" href="#"> <i class="fas fa-envelope"></i> ikram@gmail.com</a>

            <a class="link" href="#"> <i class="fas fa-map"></i> mogdisho, somalia </a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

    <!-- <div class="credit"> created by <span>dailywebdesign</span> || all rights reserved! </div> -->

</section>




	</body>
	</html>