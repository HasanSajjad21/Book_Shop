<!DOCTYPE html>
<html>
<head>
  <title>More Books</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .more-books-section {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .category-title {
      color: #333;
      font-size: 24px;
      margin-top: 0;
    }

    .more-books-grid {
      display: flex;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .book-item {
  width: calc(33.33% - 20px);
  margin: 10px;
  background-color: #f9f9f9;
  padding: 10px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.book-item img {
  width: 100%;
  max-height: 200px;
  object-fit: contain;
  border-radius: 4px;
}

.book-title {
  margin: 10px 0 5px;
  font-size: 18px;
  color: #333;
}

.author-name {
  margin-bottom: 10px;
  font-size: 14px;
  color: #777;
}

.book-price {
  font-size: 16px;
  color: #555;
}

.add-to-cart-button {
  display: inline-block;
  padding: 8px 16px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease-in-out;
}

.add-to-cart-button:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
<?php
include 'connect.php';

$category = $_GET['category']; // Retrieve the selected category from the URL parameter

$query = "SELECT * FROM books WHERE category = '$category'";
$result = mysqli_query($conn, $query);
?>

<section class="more-books-section">
  <h2 class="category-title"><?php echo $category; ?> Books</h2>

  <div class="more-books-grid">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="book-item">';
      echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
      echo '<h3 class="book-title">' . $row['title'] . '</h3>';
      echo '<p class="author-name">By ' . $row['author'] . '</p>';
      echo '<h3 class="book-price">Price: ' . $row['price'] . '$</h3>';
      echo '<button><a href="shopping_cart.php?id=' . $row['id'] . '" class="add-to-cart-button">Add to Cart</a></button>';
      echo '</div>';
    }
    ?>
  </div>

  <?php mysqli_close($conn); ?>
</section>
<section>
          <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="image/Screenshot 2023-06-19 115255.png">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quaerat ipsa aspernatur ad 
                    sequi, dolore eveniet vitae quasi. Excepturi ipsa odio impedit sequi at hic velit, minus 
                    vero sint. Voluptas?
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Featured</a>
                <a href="#">Arrivals</a>
                <a href="#">Reviews</a>
                <a href="#">Blog</a>
                
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
  // JavaScript code for the morebooks.php page

  // Smooth scrolling 
  var addToCartButtons = document.querySelectorAll('.add-to-cart-button');
  addToCartButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
     
      window.location.href = button.getAttribute('href');
    });
  });
</script>

</body>
</html>
