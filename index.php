<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>

    <style>
 
       

       section .main .main_tag .main_btn {
    background: #08a192;
    padding: 10px 20px;
    position: relative;
    top: 150px;
    left: 25px;
    color: #fff;
    text-decoration: none;
    z-index: 1;
  }
       .user-box {
  position: fixed;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px;
  display: none;
  z-index: 9999; /* pop upure je gese tar jonno ata ad korsi*/
}

.user-box p {
  margin: 5px 0;
}


/* Best Books Section start koresi */
.best-books-section {
  margin-top: 40px;
}

.category-books {
  margin-bottom: 30px;
}

.category-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.best-books-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  gap: 20px;
}

.book-item {
  width: 250px;
  background-color: #f5f5f5;
  padding: 20px;
  text-align: center;
}

.book-item img {
  max-width: 100%;
  height: auto;
}

.book-title {
  font-size: 18px;
  margin: 10px 0;
}

.author-name {
  font-size: 14px;
  color: #777;
}

.see-more-button {
  margin-top: 20px;
  text-align: center;
}

.see-more-button a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

.see-more-button a:hover {
  background-color: #0069d9;
}




.videoh1{
  text-align: center;
    font-size: 50px;
    margin-top: 55px;
}


.video-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}


.video-container {
  flex-basis: 20%;
  max-width: 20%;
  margin-bottom: 20px;
}

@media (max-width: 768px) {
  .video-container {
    flex-basis: 40%;
    max-width: 40%;
  }
}

@media (max-width: 480px) {
  .video-container {
    flex-basis: 100%;
    max-width: 100%;
  }
}


















/*reviews*/

/*reviews*/

.reviews {
  width: 100%;
  height: auto;
}

.reviews h1 {
  text-align: center;
  font-size: 4rem;
  margin-top: 3.125rem;
}

.reviews .review_box {
  width: 95%;
  height: auto;
  margin: 1.25rem auto;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.reviews .review_box .review_card {
  width: 90%;
  max-width: 400px;
  box-shadow: 0 0 8px #425f60;
  padding: 1.25rem;
  margin: 0.625rem;
}

.reviews .review_box .review_card i {
  float: right;
  font-size: 5rem;
  position: relative;
  bottom: 1.25rem;
  color: #eaeaea;
}

.reviews .review_box .review_card .card_top img {
  width: 2.5rem;
  border-radius: 50%;
  margin-bottom: 0.625rem;
}

.reviews .review_box .review_card .card p {
  margin: 0.625rem 0 0.625rem 0;
  text-align: justify;
  line-height: 1.375rem;
}

.reviews .review_box .review_card .card .review_icon i {
  font-size: 1rem;
  float: left;
  margin-top: 1.25rem;
  color: #089da1;
  padding: 0 1px;
}

/*Footer suru koresi colcor= #08a192 */



footer{
  width: 100%;
  background: #96bfc8;
}

footer .footer_main{
  width: 100%;
  display: flex;
  justify-content: space-around;
}

footer .footer_main .tag{
  margin: 20px 0;
}

footer .footer_main .tag img{
  width: 100px;
  margin-bottom: 10px;
}

footer .footer_main .tag p{
  width: 250px;
  line-height: 22px;
  text-align: justify;
}

footer .footer_main .tag h1{
  font-size: 25px;
  margin: 25px 0;
  color: #000;
}

footer .footer_main .tag a{
  display: block;
  color: black;
  text-decoration: none;
  margin: 10px 0;
}

footer .footer_main .tag i{
  margin-right: 10px;
}

footer .footer_main .tag .social_link i{
  margin: 0 5px;
}

footer .footer_main .tag .search_bar{
  width: 230px;
  height: 30px;
  background: rgba(202,202,202);
  border-radius: 25px;
}

footer .footer_main .tag .search_bar input{
  width: 200px;
  padding: 2px 0;
  position: relative;
  top: 17%;
  left: 6%;
  border: none;
  outline: none;
  font-size: 13px;
  background: none;
}

footer .footer_main .tag .search_bar button{
  padding: 7px 15px;
  background: #0a900e;
  border: none;
  margin-top: 15px;
  border-radius: 25px;
  color: #fff;
  cursor: pointer;
}

footer .end{
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 15px;
  color: #000;
}

footer .end span{
  color: #9e2c02;
  margin-left: 10px;
}


    </style>
</head>

<body>
<header class="header">

<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-book"></i> Story keeper </a>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart" onclick="shoppingCart()"></a>
        <?php 
        
    if (isset($_SESSION['email'])) {
        echo '<div id="user-btn" class="fas fa-user"></div>';
        if ($_SESSION['email'] === 'a@a.com') {
            // Specific email matched, show "Add Book" option
            echo '<a href="addbook.php">Add Book</a>';
        }
        echo '<a href="logout.php">Log out</a>';
    }
    else {
        // User is not logged in
        echo '<a href="loginin.php">Log in</a>';
    }
    ?>
    <div class="user-box">          
        <p>Name: <span><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></span></p>
        <p>email : <span><?php echo $_SESSION['email']; ?></span></p>
        <p>phone number : <span><?php echo $_SESSION['phone_number']; ?></span></p>
    </div>
    <script>
      function shoppingCart() {
      window.location.href = "shopping_cart.php";
    }
    </script>
        

    </div>

</div>

<div class="header-2">
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#categories">categories</a>
        <a href="#video-review">video</a>
        <a href="#cusrivo">Review</a>
        <a href="#footore">About</a>
    </nav>
</div>

</header>
    <footer class="footer">
        <nav class="bottom-navbar">
            <a href="#banner-section"><i class="fas fa-home"></i> Home</a>
            <a href="#categories">categories</a>
            <a href="#featured"><i class="fas fa-star"></i> Featured</a>
            <a href="#arrivals"><i class="fas fa-clipboard"></i> Arrivals</a>
            <a href="#blogs"><i class="fas fa-blog"></i> Blogs</a>
        </nav>
    </footer>


    <section id="banner-section">
        <div class="main">

            <div class="main_tag">
                <h1>WELCOME TO<br><span>STORY KEEPER</span></h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias atque laborum
                    non fuga ex deserunt. Exercitationem velit ducimus praesentium, obcaecati hic voluptate id
                    tenetur fuga illum quidem omnis? Rerum?
                </p>
                <a href="#" class="main_btn">Learn More</a>

            </div>

            <div class="main_img">
                <img src="image/table.png">
            </div>

        </div>
    </section>
   


    <!--catagori suru korlam-->
  


    <section id="categories">
        <div class="container">
        <h2 style="font-size: 28px">Categories</h2>
            <div class="category-slider">

                <div class="category-item">
                    <img src="cat-img/rel.jpg" alt="catefory 1">
                    <h3>Relagious</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/most.jpg" alt="Category 2">
                    <h3>Most Popular</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/art.jpg" alt="Category 4">
                    <h3>Art</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Bio.jpg" alt="Category 5">
                    <h3>Biography</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Buss.jpg" alt="Category 6">
                    <h3>Business and Carer</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Env.jpg" alt="Category 7">
                    <h3>Environment</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Friction.jpg" alt="Category 8">
                    <h3>Fiction and Literature</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Helth.jpg" alt="Category 9">
                    <h3>Health & Fitness</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Lifest.jpg" alt="Category 10">
                    <h3>Lifestyle</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/person.jpg" alt="Category 2">
                    <h3>Personal Grouth</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/science.jpg" alt="Category 11">
                    <h3>Science and Research</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/Technolgy.jpg" alt="Category 12">
                    <h3>Technology</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/child.jpg" alt="Category 13">
                    <h3>Children</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/political.jpg" alt="Category 14">
                    <h3>Political</h3>
                </div>
            
            </div>
        </div>
    </section>





        
        <section class="best-books-section">
  <?php
  include 'connect.php';

  $categories = array("Most Popular", "Religious", "Fiction", "Romantic", "Sci-Fi", "Children"); //  categories

  foreach ($categories as $category) {
    echo '<div class="category-books">';
    echo '<h2 class="category-title">' . $category . '</h2>';

    $query = "SELECT * FROM books WHERE category = '$category' LIMIT 6"; // Retrieve 5 books per category 
    $result = mysqli_query($conn, $query);

    echo '<div class="best-books-grid">';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="book-item">';
      echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
      echo '<h3 class="book-title">' . $row['title'] . '</h3>';
      echo '<p class="author-name">By ' . $row['author'] . '</p>';
      echo '<h3 class="book-price">Price: ' . $row['price'] . '$</h3>';
      echo '<button><a href="shopping_cart.php?id=' . $row['id'] . '" class="add-to-cart-button">Add to Cart</a></button>';
      echo '</div>';
    }
    echo '</div>'; // Close best-books-grid

    echo '<div class="see-more-button">';
    echo '<a href="morebooks.php?category=' . $category . '">See More</a>';
    echo '</div>';

    echo '</div>'; // Close category-books
  }

  mysqli_close($conn);
  ?>
</section>





<!--vidwo-->






<section id="video-review">

  <h1 class="videoh1" >Video Review</h1>

  <div class="video-wrapper">
    <div class="video-container">
      <iframe width="280" height="157" src="https://www.youtube.com/embed/ok9MKt7gpNA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-container">
      <iframe width="280" height="157" src="https://www.youtube.com/embed/vQZRuWS0rE4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-container">
      <iframe width="280" height="157" src="https://www.youtube.com/embed/lclue5ny6ik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-container">
      <iframe width="280" height="157" src="https://www.youtube.com/embed/nXPSurPBBUg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="video-container">
      <iframe width="280" height="157" src="https://www.youtube.com/embed/SzkBN8FUnWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
</section>








    <!--reviews-->

    <div class="reviews" id="cusrivo">
        <h1>Customers Review</h1>

        <div class="review_box">

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_1.png">
                </div>
                <div class="card">
                    <h2>Zahid Hasan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                       
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_2.png">
                </div>
                <div class="card">
                    <h2>sadia Arin</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        dis
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_3.png">
                </div>
                <div class="card">
                    <h2>Rezaul karim</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        distinctio!  
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_4.png">
                </div>
                <div class="card">
                    <h2>Zarin Tasnim</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        distinctio!
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>


<!--Fotter-->



<section id="footore">
          <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="image/Screenshot_2023-06-19_115255-removebg-preview.png">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quaerat ipsa aspernatur ad 
                    sequi, dolore eveniet vitae quasi. Excepturi ipsa odio impedit sequi at hic velit, minus 
                    vero sint. Voluptas?
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#">Home</a>
                <a href="#footore">About</a>
                <a href="#cusrivo">Reviews</a>
                <a href="#video-review">Video</a>
                
            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+014566666668</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+012345678910</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>storykeeper123@gmail.com</a>
                
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fas fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>                
            </div>            
            
        </div>

        <p class="end">Design By<span><i class="fa-solid fa-face-grin"></i> Sajjad and Reza</span></p>
  </section>
    </footer>
</section>


<script>
  function scrollToSection(sectionId) {
    // Get the target section element
    const section = document.querySelector(sectionId);

    // Scroll to the section smoothly
    section.scrollIntoView({ behavior: 'smooth' });
  }
</script>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


</body>

</html>

