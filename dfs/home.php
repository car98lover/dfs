<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/black.jpg) no-repeat">
            <div class="content">
               <h3><span>DUTTA </span>FILMS STUDIO</h3>
               <p>Magicians Of Reel Life</p>
               <a href="about.php" class="btn">Contact Us</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/haldi.jpg) no-repeat">
            <div class="content">
            <h3><span>DUTTA </span>FILMS STUDIO</h3>
               <p>Magicians Of Reel Life</p>
               <a href="about.php" class="btn">Contact Us</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/saree.jpg) no-repeat">
            <div class="content">
            <h3><span>DUTTA </span>FILMS STUDIO</h3>
               <p>Magicians Of Reel Life</p>
               <a href="about.php" class="btn">Contact Us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">Gallery</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/photo 1.jpg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>Captured By Sandeep Dutta</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 5.jpeg" alt="">
            <div class="content">
               <h3>wedding registory</h3>
               <p>Captured By Abhishek Anand</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 3.jpg" alt="">
            <div class="content">
               <h3>guest list</h3>
               <p>Captured By Satyam</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 4.jpeg" alt="">
            <div class="content">
               <h3>wedding cake</h3>
               <p>Captured By Shubham Sriyam</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 2.jpg" alt="">
            <div class="content">
               <h3>wedding ceremony</h3>
               <p>Captured By Sandeep Dutta</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 6.jpeg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Captured By Satyam</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 7.jpeg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Captured By Abhishek Anand</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 8.jpeg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Captured By Sandeep Dutta</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo 9.jpeg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Captured By Shubham Sriyam</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>