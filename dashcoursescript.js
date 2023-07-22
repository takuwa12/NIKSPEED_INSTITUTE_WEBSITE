// Function to handle the enroll button click
function enrollButtonClick(event) {
    var button = event.target;
    button.classList.toggle('enrolled');

    // Show the popup message
    showEnrollMessage();
}

// Attach event listeners to the enroll buttons
var enrollButtons = document.querySelectorAll('.enroll-button');
enrollButtons.forEach(function(button) {
    button.addEventListener('click', enrollButtonClick);
});
