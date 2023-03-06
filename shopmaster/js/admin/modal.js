// Get all the buttons that open a modal
let modalBtns = document.querySelectorAll('.show-modal');

// Loop through the buttons and add a click event listener
modalBtns.forEach(function(btn) {
  btn.addEventListener('click', function() {
    let modalId = btn.getAttribute('data-modal'); // Get the ID of the modal
    let modal = document.getElementById(modalId); // Get the modal element
    modal.style.display = 'block'; // Show the modal
  });
});

// Get all the close buttons for the modals
let closeBtns = document.querySelectorAll('.close-modal');

// Loop through the close buttons and add a click event listener
closeBtns.forEach(function(btn) {
  btn.addEventListener('click', function() {
    let modalId = btn.getAttribute('data-modal'); // Get the ID of the modal
    let modal = document.getElementById(modalId); // Get the modal element
    modal.style.display = 'none'; // Hide the modal
  });
});
