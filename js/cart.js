// JavaScript (cart.js)

// Get the necessary elements
const totalAmountElement = document.getElementById('total-amount');
const productCheckboxes = document.querySelectorAll('.product-checkbox');
const quantityInputs = document.querySelectorAll('.quantity-input');
const deleteButton = document.querySelector('.delete-button');

// Function to update the total amount
function updateTotalAmount() {
  let total = 0;
  let selectedProducts = 0;

  // Calculate the total amount based on selected products and their quantities
  for (let i = 0; i < productCheckboxes.length; i++) {
    if (productCheckboxes[i].checked) {
      const quantity = parseInt(quantityInputs[i].value);
      const price = parseInt(quantityInputs[i].parentNode.nextElementSibling.innerText);
      total += quantity * price;
      selectedProducts++;
    }
  }

  // Update the total amount and enable/disable the delete button based on selected products
  if (selectedProducts > 0) {
    totalAmountElement.textContent = `$${total.toFixed(2)}`;
    deleteButton.disabled = false;
  } else {
    totalAmountElement.textContent = 'No product';
    deleteButton.disabled = true;
  }
}

// Event listeners for product checkboxes and quantity inputs
productCheckboxes.forEach((checkbox) => {
  checkbox.addEventListener('change', updateTotalAmount);
});

quantityInputs.forEach((input) => {
  input.addEventListener('input', updateTotalAmount);
});

// Event listener for the delete button
deleteButton.addEventListener('click', deleteSelectedItem);

// Function to handle the delete button click
function deleteSelectedItem() {
  const selectedItems = document.querySelectorAll('.cart-item.selected');
  
  // Remove the selected items from the table
  selectedItems.forEach((item) => {
    item.remove();
  });

  // Update the total amount and enable/disable the delete button
  updateTotalAmount();
}


// Function to handle the redirect to the order page
function redirectToOrderPage() {
  const selectedProducts = [];
  let totalAmount = 0;

  // Gather selected product details and calculate the total amount
  for (let i = 0; i < productCheckboxes.length; i++) {
    if (productCheckboxes[i].checked) {
      const productName = quantityInputs[i].parentNode.previousElementSibling.textContent;
      const productImage = quantityInputs[i].parentNode.previousElementSibling.previousElementSibling.firstElementChild.src;
      const quantity = parseInt(quantityInputs[i].value);
      const price = parseInt(quantityInputs[i].parentNode.nextElementSibling.innerText);
      totalAmount += quantity * price;

      // Create an object with product details
      const product = {
        name: productName,
        image: productImage,
        quantity: quantity,
        price: price
      };

      selectedProducts.push(product);
    }
  }

  // Construct the URL query string with the selected product details and total amount
  const queryString = new URLSearchParams({
    products: JSON.stringify(selectedProducts),
    totalAmount: totalAmount.toFixed(2)
  }).toString();

  // Redirect to the order page with the constructed URL
  window.location.href = 'order-page.html?' + queryString;
}

// Add event listener to the checkout button
const checkoutButton = document.getElementById('checkout-button');
checkoutButton.addEventListener('click', redirectToOrderPage);
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
// Delete selected items
function deleteSelectedItems() {
var selectedProducts = document.querySelectorAll('.cart-item input.product-checkbox:checked');

for (var i = 0; i < selectedProducts.length; i++) {
var row = selectedProducts[i].closest('tr');
var cartItemId = row.getAttribute('data-book-id');

// Send an AJAX request to delete the item from the database
deleteCartItem(cartItemId);

// Remove the row from the table
row.parentNode.removeChild(row);
}

updateTotal();
}

// Function to delete the item from the database using AJAX
function deleteCartItem(cartItemId) {
var xhr = new XMLHttpRequest();
xhr.open('POST', 'delete_cart_item.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function () {
if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
  console.log('Item deleted successfully.');
}
};
xhr.send('cartItemId=' + encodeURIComponent(cartItemId));
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