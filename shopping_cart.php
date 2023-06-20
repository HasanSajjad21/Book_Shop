<!DOCTYPE html>
<html>
<head>
  <title>My Shopping Cart</title>
  <!-- Add your CSS stylesheets and JavaScript files -->
  <link rel="stylesheet" href="css/cart.css">
  <style>
    .shopping-cart-table {
      width: 100%;
    }

    .shopping-cart-table td {
      padding: 10px;
    }

    .shopping-cart-table tr.selected {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <header>
    <h1>My Shopping Cart</h1>
    <div class="total-section">
      <span id="total-amount">No product</span>
      <button id="delete-button" class="delete-button" disabled>Delete Item</button>
    </div>
  </header>

  <main>
    <table class="shopping-cart-table">
      <thead>
        <tr>
          <th>Product Image</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Select</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include("connect.php");

        if (isset($_GET['id'])) {
          $selectedBookId = $_GET['id'];

          // Check if the selected book is already in the cart
          $query = "SELECT * FROM cart WHERE book_id = '$selectedBookId'";
          $result = $conn->query($query);

          if ($result->num_rows > 0) {
            // Book is already in the cart, increase its quantity
            $updateQuery = "UPDATE cart SET quantity = quantity + 1 WHERE book_id = '$selectedBookId'";
            $conn->query($updateQuery);
          } else {
            // Book is not in the cart, add it as a new item
            $insertQuery = "INSERT INTO cart (book_id, quantity) VALUES ('$selectedBookId', 1)";
            $conn->query($insertQuery);
          }
        }

        // Fetch books from the cart
        $sql = "SELECT cart.id, books.image, books.title, books.price, cart.quantity FROM cart INNER JOIN books ON cart.book_id = books.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $cartItemId = $row['id'];
            $bookImage = $row['image'];
            $bookName = $row['title'];
            $bookPrice = $row['price'];
            $bookQuantity = $row['quantity'];

            echo '
            <tr class="cart-item" data-book-id="' . $cartItemId . '">
              <td class="image-cell">
                <img src="' . $bookImage . '" alt="Product Image">
              </td>
              <td>' . $bookName . '</td>
              <td>
                <input type="number" value="' . $bookQuantity . '" min="1" class="quantity-input">
              </td>
              <td>' . $bookPrice . '</td>
              <td>
                <input type="checkbox" class="product-checkbox" data-cart-id="' . $cartItemId . '">
              </td>
            </tr>';
          }
        } else {
          echo "<tr><td colspan='5'>No books found in the cart.</td></tr>";
        }

        $conn->close();
        ?>
      </tbody>
    </table>

    <div class="buttons-section">
      <button class="continue-shopping-button" onclick="continueShopping()">Continue Shopping</button>
      <button id="checkout-button" class="checkout-button">Checkout</button>
    </div>
  </main>

  <script>
    // Continue shopping button event handler
    function continueShopping() {
      window.location.href = "index.php";
    }
    
    // Wait for the DOM to load
    document.addEventListener('DOMContentLoaded', function () {
      // Get the required elements
      var deleteButton = document.getElementById('delete-button');
      var productCheckboxes = document.getElementsByClassName('product-checkbox');
      var checkoutButton = document.getElementById('checkout-button');

      // Attach event listeners
      for (var i = 0; i < productCheckboxes.length; i++) {
        productCheckboxes[i].addEventListener('change', updateDeleteButtonState);
      }

      deleteButton.addEventListener('click', deleteSelectedItems);
      checkoutButton.addEventListener('click', checkout);

      // Update the total amount
      updateTotal();
    });

    // Update the total amount
    function updateTotal() {
      var totalAmount = 0;
      var selectedProducts = {};

      var quantityInputs = document.getElementsByClassName('quantity-input');
      var priceCells = document.querySelectorAll('.cart-item td:nth-child(4)');
      var productCheckboxes = document.getElementsByClassName('product-checkbox');

      for (var i = 0; i < productCheckboxes.length; i++) {
        if (productCheckboxes[i].checked) {
          var rowIndex = Array.from(productCheckboxes[i].closest('tr').parentElement.children).indexOf(productCheckboxes[i].closest('tr'));
          var quantity = parseInt(quantityInputs[rowIndex].value);
          var price = parseFloat(priceCells[rowIndex].innerText);
          var bookId = productCheckboxes[i].getAttribute('data-book-id');

          if (selectedProducts[bookId]) {
            selectedProducts[bookId].quantity += quantity;
          } else {
            selectedProducts[bookId] = {
              quantity: quantity,
              price: price
            };
          }
        }
      }

      for (var bookId in selectedProducts) {
        var bookQuantity = selectedProducts[bookId].quantity;
        var bookPrice = selectedProducts[bookId].price;
        totalAmount += bookQuantity * bookPrice;
      }

      document.getElementById('total-amount').innerText = '$' + totalAmount.toFixed(2);

      updateDeleteButtonState();
    }

    // Update the delete button state
    function updateDeleteButtonState() {
      var selectedProducts = document.querySelectorAll('.cart-item input.product-checkbox:checked');
      var deleteButton = document.getElementById('delete-button');

      deleteButton.disabled = selectedProducts.length === 0;
    }

    // Delete selected items
    function deleteSelectedItems() {
      var selectedProducts = document.querySelectorAll('.cart-item input.product-checkbox:checked');

      for (var i = 0; i < selectedProducts.length; i++) {
        var row = selectedProducts[i].closest('tr');
        row.parentNode.removeChild(row);
      }

      updateTotal();
    }

    // Checkout function
    function checkout() {
      var selectedProducts = document.querySelectorAll('.cart-item input.product-checkbox:checked');
      var selectedProductNames = [];

      for (var i = 0; i < selectedProducts.length; i++) {
        var row = selectedProducts[i].closest('tr');
        var productName = row.querySelector('td:nth-child(2)').innerText;
        selectedProductNames.push(productName);
      }

      // Perform the checkout action
      console.log('Checkout:', selectedProductNames.join(', '));
    }
  </script>
  <script src="js/cart.js"></script>
</body>
</html>