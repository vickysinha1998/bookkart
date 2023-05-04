<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about </h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Find Your Favourite Authors</h3>
         <p>
 
           You can also buy books online of your favourite authors. Whether you are a follower of Shakespeare’s
            body of work, find inspiration from Robin Sharma’s books, a fan of J.K. Rowling, enjoy Dan Brown’s 
            thrillers, Nicholas Sparks’ romantic novels, or Chetan Bhagat or Dr. Joseph Murphy books, 
            you can find books by almost all the authors, poets, writers, etc. A good book can inspire you,
             guide you, help you gain perspective, and succeed in life. 
             So, log on to your favorite online bookkart store and find the right books for yourself. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Rabindranath-Tagore.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rabindranath Tagore</h3>
      </div>

      <div class="box">
         <img src="images/Kiran-Desai-1.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kiran Desai</h3>
      </div>

      <div class="box">
         <img src="images/chetan bhagat.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="images/_Devdutt Pattanaik.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Devdutt Pattanaik</h3>
      </div>

      <div class="box">
         <img src="images/Aravind-Adiga.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Aravind Adiga</h3>
      </div>

      <div class="box">
         <img src="images/amish-tripathi.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amish Tripathi</h3>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/51.jpeg" alt="">
         <p>Good paper quality .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>surendra</h3>
      </div>

      <div class="box">
         <img src="images/51.jpeg" alt="">
         <p>Nice packing and delivery on time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Manindra</h3>
      </div>

      <div class="box">
         <img src="images/51.jpeg" alt="">
         <p>Good service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aman</h3>
      </div>

      <div class="box">
         <img src="images/51.jpeg" alt="">
         <p>Nice book.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ravi</h3>
      </div>

      <div class="box">
         <img src="images/51.jpeg" alt="">
         <p>Nice product quality.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>vicky</h3>
      </div>

      <div class="box">
         <img src="images/51.jpeg" alt="">
         <p>Nice packing and delivery on time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Avinash</h3>
      </div>

   </div>

</section>




<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>