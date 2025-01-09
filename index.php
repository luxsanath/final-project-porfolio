<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Deco</title>
	
	<link rel="shortcut icon" type ="x-icon" href="images/lu.jpg">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="css/style.css">
	


</head>
<body>

<header class="header">

   <div id="menu-btn" class="fas fa-bars icons"></div>

   <nav class="navbar">
      <a href="#home">home</a>
      <a href="#menu">menu</a>
      <a href="#about">about</a>
      <a href="#Decorators">Decorators</a>
      <a href="#contact">contact</a>
      <a href="#blogs">blogs</a>
	  <a href="Booknow2.php">book now</a>

   </nav>

   <a href="Booknow2.php" class="fas fa-shopping-cart icons"></a>
   <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
   </form>
   
</header>

<section class="home" id="home">
   <div class="content">
      <img data-aos="fade-up" data-aos-delay="150" src="images/1 (8).jpg" alt="">
      <h3 data-aos="fade-up" data-aos-delay="300">Event Deco</h3>
      <p data-aos="fade-up" data-aos-delay="450">If you are looking for an unforgettable experience for your special celebrations, 
	  you have come to the right place. Event Deco is a kids and adults event planning service that specializes in bringing a touch of magic to your every life celebration.</p>
      <a data-aos="fade-up" data-aos-delay="600" href="#menu" class="btn">our menu</a>
   </div>
   
</section>

<section class="menu" id="menu">

   <div class="heading">
      <img src="images/lu.jpg" alt="">
      <h3>our menu</h3>
   </div>
   
   <div class="heading">
      <h3 style="color:white;"><u> Hall Decorations </u></h3>
	     </div>

   <div class="box-container">

      <div class="box" data-aos="fade-up" data-aos-delay="150">
         <img src="images/b (2).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Package</h3>
            <div class="price">5000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
         <img src="images/11.jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>package</h3>
            <div class="price">15000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
         <img src="images/3 (4).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>package</h3>
            <div class="price">25000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>
	  </section>

<section class="menu" id="menu">

   <div class="heading">
      <h3 style="color:white;"><u> Balloon Decorations </u></h3>
	     </div>
   


   <div class="box-container">

      <div class="box" data-aos="fade-up" data-aos-delay="150">
         <img src="images/1 (7).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Package</h3>
            <div class="price">5000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
         <img src="images/1 (6).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>package</h3>
            <div class="price">15000 Rs.</div>
			<a href="Balloon deco1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
         <img src="images/1 (5).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>package</h3>
            <div class="price">25000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>
	  </section>

<section class="menu" id="menu">

   <div class="heading">
      <h3 style="color:white;"><u> Lighting Decorations </u></h3>
	     </div>
   
   <div class="box-container">

      <div class="box" data-aos="fade-up" data-aos-delay="150">
         <img src="images/3 (11).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Package</h3>
            <div class="price">5000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
         <img src="images/3 (2).png" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>package</h3>
            <div class="price">15000 Rs.</div>
			<a href="hallpack1.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
         <img src="images/3 (2).jpg" alt="">
         <div class="content">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>package</h3>
            <div class="price">25000 Rs.</div>
			<a href="Lighting3.html" class="btn">read more...</a>
            <a href="Booknow2.php" class="btn">Book Now</a>
         </div>
      </div>
	  </section>
<section class="about" id="about">

   <div class="image" data-aos="fade-right" data-aos-delay="150">
      <img src="images/a.png" alt="">
   </div>

   <div class="content" data-aos="fade-left" data-aos-delay="300">
      <h3 class="title">Event Deco</h3>
      <p> EVENT DECO to make it simpler for individuals to make decorations in a 
minimal expense, perfect and clean way. I made my site.</p>
      <div class="icons">
         <h3> <i class="fas fa-check"></i> best price </h3>
         <h3> <i class="fas fa-check"></i> Best Service </h3>
         <h3> <i class="fas fa-check"></i> Save You Time And Money </h3>
         <h3> <i class="fas fa-check"></i> Creative design </h3>
         <h3> <i class="fas fa-check"></i> Clear service </h3>
         <h3> <i class="fas fa-check"></i> speed decorations </h3>
      </div>
      <a href="#" class="btn">read more</a>
   </div>

</section>

<section class="Decorators" id="Decorators">

   <div class="heading">
      <img src="images/3 (4)" alt="">
      <h3>Our Decorators</h3>
   </div>

   <div class="box-container">

      <div class="box" data-aos="fade-up" data-aos-delay="150">
         <img src="images/hari.jpg" alt="">
         <h3>Harishnath</h3>
         <p>Hall Decorators</p>
		 <p>076-8666323</p>

      </div>


      <div class="box" data-aos="fade-up" data-aos-delay="450">
         <img src="images/lux.jpg" alt="">
         <h3>Luxsanath</h3>
         <p>Lighting Decorators</p>
		 <p>077-4968839</p>

      </div>

   </div>

</section>

<section class="contact" id="contact">

   <div class="heading">
      <h3>contact us</h3>
   </div>

   <div class="row">

      <iframe data-aos="fade-up" data-aos-delay="150" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.137410417315!2d81.79843594213465!3d7.368931631094714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae53e18f5349265%3A0xdf35cd9c6cd5094a!2sAnna%20Brothers%20Food%20City!5e0!3m2!1sen!2slk!4v1641385127272!5m2!1sen!2slk" 
	  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>" 
	</iframe> 
	  
   </div>

</section>

<section class="blogs" id="blogs">

   <div class="heading">
      <h3>The decorations we finished doing</h3>
   </div>

   <div class="box-container">

      <div class="box" data-aos="fade-up" data-aos-delay="150">
         <div class="image">
            <img src="images/3 (5).jpg" alt="">
            <div class="icons">
               <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
               <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
         </div>
         <div class="content">
            <h3>Wedding decorations(Tharsan & Priya).</h3>
            <p>kalmunai.</p>
            <a href="#" class="btn">read more</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
         <div class="image">
            <img src="images/11.jpg" alt="">
            <div class="icons">
               <a href="#"> <i class="fas fa-calendar"></i> 10th july, 2022 </a>
               <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
         </div>
         <div class="content">
            <h3>Puberty Function(kansiha).</h3>
            <p>Batticaloa.</p>
            <a href="#" class="btn">read more</a>
         </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
         <div class="image">
            <img src="images/b (7).jpg" alt="">
            <div class="icons">
               <a href="#"> <i class="fas fa-calendar"></i> 01st january, 2021 </a>
               <a href="#"> <i class="fas fa-user"></i> by admin </a>
            </div>
         </div>
         <div class="content">
            <h3>50th birthday Function(Tharmalingam).</h3>
            <p>Ampara.</p>
            <a href="#" class="btn">read more</a>
         </div>
      </div>

   </div>

</section>

<section class="footer">

   <div class="links">
	  <a href="#home" class="btn">home</a>
      <a href="#menu" class="btn">menu</a>
      <a href="#about" class="btn">about</a>
      <a href="#Decorators" class="btn">Decorators</a>
      <a href="#contact" class="btn">contact</a>
      <a href="#blogs" class="btn">blogs</a>
	  <a href="Booknow2.php" class="btn">book now</a>

   </div>

   <p class="credit"> created by <span>Copyright © Luxsanath</span> | all rights reserved! </p>
</section>

<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

AOS.init({ 
   duration: 800,
});

</script>
</body>
</html>