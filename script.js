// script.js

// Initialize the Slick Carousel
$(document).ready(function() {
    $('.category-slider').slick({
        slidesToShow: 4, // akhane slide visible number
        slidesToScroll: 1, 
        autoplay: false, 
        
        responsive: [
            {
                breakpoint: 992, // Adjust
                settings: {
                    slidesToShow: 3 // Change the number of visible slides for smaller screens
                }
            },
            {
                breakpoint: 768, 
                settings: {
                    slidesToShow: 2 
                }
            }
        ]
    });
});

// Add click event listener to category items
$('.category-item').click(function() {
    
    var categoryName = $(this).find('h3').text();
    console.log('Clicked category:', categoryName);
    
});






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