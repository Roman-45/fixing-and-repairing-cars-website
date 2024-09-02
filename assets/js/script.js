'use strict';



/**
 * MOBILE NAVBAR TOGGLE
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");

navToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

document.getElementById('quote-form').addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const service = document.getElementById('service').value;
  const message = document.getElementById('message').value;

  const quoteData = {
      name,
      email,
      phone,
      service,
      message
  };

  // Simulate sending data to the backend
  console.log('Sending quote request:', quoteData);

  // Display a success message
  alert('Your quote request has been sent successfully!');
  // Optionally, clear the form
  document.getElementById('quote-form').reset();
});
