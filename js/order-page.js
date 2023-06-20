// Get the order-details element where the product details and total amount will be displayed
const orderDetailsElement = document.getElementById('order-details');

// Function to retrieve the URL query string parameters
function getQueryStringParams() {
  const searchParams = new URLSearchParams(window.location.search);
  const params = {};

  for (let [key, value] of searchParams.entries()) {
    params[key] = value;
  }

  return params;
}

// Function to display the product details and total amount on the order page
function displayOrderDetails() {
  const params = getQueryStringParams();

  // Retrieve the selected product details and total amount from the URL query string
  const selectedProducts = JSON.parse(params.products);
  const totalAmount = params.totalAmount;

  // Build the HTML content to display the product details and total amount
  let html = '';
  selectedProducts.forEach((product) => {
    html += `
      <div class="product-item">
        <img src="${product.image}" alt="${product.name}" class="product-image">
        <h3 class="product-name">${product.name}</h3>
        <p>Quantity: ${product.quantity}</p>
        <p>Price: $${product.price}</p>
      </div>
    `;
  });

  html += `<h2 class="total-amount">Total Amount: $${totalAmount}</h2>`;

  // Update the order-details element with the generated HTML content
  orderDetailsElement.innerHTML = html;
}

// Call the displayOrderDetails function to populate the order page with the product details and total amount
displayOrderDetails();
