// script.js

// Initialize the Slick Carousel
$(document).ready(function() {
    $('.category-slider').slick({
        slidesToShow: 4, // Number of visible slides
        slidesToScroll: 1, // Number of slides to scroll at a time
        autoplay: false, // Enable autoplay if needed
        //dots: true, // Display navigation dots
        responsive: [
            {
                breakpoint: 992, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 3 // Change the number of visible slides for smaller screens
                }
            },
            {
                breakpoint: 768, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 2 // Change the number of visible slides for even smaller screens
                }
            }
        ]
    });
});

// Add click event listener to category items
$('.category-item').click(function() {
    // Get the category name or perform any other action
    var categoryName = $(this).find('h3').text();
    console.log('Clicked category:', categoryName);
    // Add your code to display the new section based on the clicked category
});




// Update the JavaScript code in your script.js file

let userBtn = document.querySelector('#user-btn');
let userBox = document.querySelector('.user-box');

userBox.style.display = 'none'; // Hide the user box initially

userBtn.addEventListener('click', (event) => {
  event.stopPropagation(); // Prevent the click event from propagating to the window

  if (userBox.style.display === 'none') {
    userBox.style.display = 'block';

    // Calculate the position of the user box
    const userBtnRect = userBtn.getBoundingClientRect();
    const bodyRect = document.body.getBoundingClientRect();

    const topPosition = userBtnRect.bottom - bodyRect.top;
    const leftPosition = userBtnRect.left - bodyRect.left + (userBtnRect.width / 2) - (userBox.offsetWidth / 2);

    userBox.style.top = `${topPosition}px`;
    userBox.style.left = `${leftPosition}px`;
  } else {
    userBox.style.display = 'none';
  }
});

// Close the user box if clicked outside
window.addEventListener('click', (event) => {
  if (!event.target.matches('#user-btn')) {
    userBox.style.display = 'none';
  }
});