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


    <title>Document</title>

    <style>
       /* Add this CSS code to your style.css file */

.user-box {
  position: fixed;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px;
  display: none;
  z-index: 9999; /* Ensure the popup is on top of other elements */
}

.user-box p {
  margin: 5px 0;
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
                <a href="#" class="fas fa-shopping-cart"></a>
                <?php 
            if (isset($_SESSION['email'])) {
                // User is logged in
                echo '<div id = "user-btn" class="fas fa-user"></div>';
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

                

            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#banner-section">home</a>
                <a href="#catagoris">catagoris</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>

                <a href="#blogs">blogs</a>
            </nav>
        </div>

    </header>
    <footer class="footer">
        <nav class="bottom-navbar">
            <a href="#banner-section"><i class="fas fa-home"></i> Home</a>
            <a href="#categories"><i class="fas fa-list"></i> Categories</a>
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
            <h2>Categories</h2>
            <div class="category-slider">
                <div class="category-item">
                    <img src="cat-img/rel.jpg" alt="catefory 1">
                    <h3>Relagious</h3>
                </div>
                <div class="category-item">
                    <img src="cat-img/most.jpg" alt="Category 2">
                    <h3>Most Popular</h3>
                </div>
                <!-- Add more category items as needed -->
                <div class="category-item">
                    <img src="cat-img/aca.jpg" alt="Category 3">
                    <h3>Academic & Education</h3>
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




    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


</body>

</html>

