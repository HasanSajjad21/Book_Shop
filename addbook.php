<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Online Bookshop - Add Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .success-message {
            color: #4CAF50;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <!-- Your header content here -->
    </header>

    <main>
        <section class="add-book-section">
            <h2>Add Book</h2>
            <?php
                session_start();
                include 'connect.php';
                
                // Array of categories
                $categories = array("Most Popular", "Religious", "Fiction", "Romantic", "Sci-Fi", "Children");
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $title = $_POST['title'];
                    $author = $_POST['author'];
                    $image = $_FILES['image']['name'];
                    $image_temp = $_FILES['image']['tmp_name'];
                    $category = $_POST['category'];
                    $price = $_POST['price'];
                    $featured = isset($_POST['featured']) ? 1 : 0;

                    $target_directory = 'book_images/';
                    $target_file = $target_directory . $image;

                    // Move the uploaded image to the target directory
                    move_uploaded_file($image_temp, $target_file);

                    $query = "INSERT INTO books (title, author, image, category, price, featured) VALUES ('$title', '$author', '$target_file', '$category','$price', $featured)";
                    mysqli_query($conn, $query);

                    // Redirect back to the index page or display a success message
                    header("Location: index.php");
                    exit();
                }
            ?>
            
            <form action="addbook.php" method="post" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>

                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <?php
                        // Loop through categories and create options
                        foreach ($categories as $category) {
                            echo "<option value='$category'>$category</option>";
                        }
                    ?>
                </select>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
                <br><br>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required>

                <label for="featured">Featured:</label>
                <input type="checkbox" id="featured" name="featured">
                        <br><br>
                <input type="submit" value="Add Book">
            </form>
            <?php
                mysqli_close($conn);
            ?>
            <div id="success-message" class="success-message" style="display: none;">Book added successfully!</div>
        </section>

        <!-- Other sections and content of your website -->
    </main>

    <footer>
        <!-- Your footer content here -->
    </footer>
    <script>
        // JavaScript for displaying success message after form submission
        document.getElementById("add-book-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            
            // Show success message
            var successMessage = document.getElementById("success-message");
            successMessage.style.display = "block";

            // Reset form
            this.reset();
        });
    </script>
</body>
</html>
