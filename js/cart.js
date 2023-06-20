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
