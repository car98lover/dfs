<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="portfolio">

   <h1 class="heading">our portfolio</h1>

   <div class="portfolio-container">

      <a href="images/port1.jpg" class="box">
         <div class="image">
            <img src="images/port1.jpg" alt="">
         </div>
         <h3>Haldi</h3>
      </a>

      <a href="images/port2.jpg" class="box">
         <div class="image">
            <img src="images/port2.jpg" alt="">
         </div>
         <h3>Mehendi</h3>
      </a>

      <a href="images/port3.jpg" class="box">
         <div class="image">
            <img src="images/port3.jpg" alt="">
         </div>
         <h3>Bride</h3>
      </a>

      <a href="images/port4.jpg" class="box">
         <div class="image">
            <img src="images/port4.jpg" alt="">
         </div>
         <h3>Bachelorhood</h3>
      </a>

      <a href="images/port5.jpg" class="box">
         <div class="image">
            <img src="images/port5.jpg" alt="">
         </div>
         <h3>Ring Light</h3>
      </a>

      <a href="images/port6.jpg" class="box">
         <div class="image">
            <img src="images/port6.jpg" alt="">
         </div>
         <h3>Ghoonghat</h3>
      </a>

      <a href="images/mirror.jpg" class="box">
         <div class="image">
            <img src="images/mirror.jpg" alt="">
         </div>
         <h3>Mirror Face</h3>
      </a>

      <a href="images/light.jpg" class="box">
         <div class="image">
            <img src="images/light.jpg" alt="">
         </div>
         <h3>Ring</h3>
      </a>

      <a href="images/mirror2.jpg" class="box">
         <div class="image">
            <img src="images/mirror2.jpg" alt="">
         </div>
         <h3>Mirror</h3>
      </a>

      <a href="images/photo 1.jpg" class="box">
         <div class="image">
            <img src="images/photo 1.jpg" alt="">
         </div>
         <h3>Haldi</h3>
      </a>

      <a href="images/photo 2.jpg" class="box">
         <div class="image">
            <img src="images/photo 2.jpg" alt="">
         </div>
         <h3>Green</h3>
      </a>

      <a href="images/photo 3.jpg" class="box">
         <div class="image">
            <img src="images/photo 3.jpg" alt="">
         </div>
         <h3>Camera</h3>
      </a>

      <a href="images/photo 4.jpg" class="box">
         <div class="image">
            <img src="images/photo 4.jpeg" alt="">
         </div>
         <h3>Smile</h3>
      </a>

      <a href="images/photo 5.jpg" class="box">
         <div class="image">
            <img src="images/photo 5.jpeg" alt="">
         </div>
         <h3>Red Saree</h3>
      </a>

      <a href="images/photo 6.jpg" class="box">
         <div class="image">
            <img src="images/photo 6.jpeg" alt="">
         </div>
         <h3>Bangles</h3>
      </a>

      <a href="images/photo 7.jpg" class="box">
         <div class="image">
            <img src="images/photo 7.jpeg" alt="">
         </div>
         <h3>Orange Saree</h3>
      </a>

      <a href="images/photo 8.jpg" class="box">
         <div class="image">
            <img src="images/photo 8.jpeg" alt="">
         </div>
         <h3>Bindi</h3>
      </a>

      <a href="images/photo 9.jpg" class="box">
         <div class="image">
            <img src="images/photo 9.jpeg" alt="">
         </div>
         <h3>Shyness</h3>
      </a>


   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>