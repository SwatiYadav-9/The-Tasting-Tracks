// Select the menu icon and the navigation list
const menuIcon = document.querySelector('.menu-icon');
const navList = document.querySelector('.nav-list ul');

// Add a click event listener to the menu icon
menuIcon.addEventListener('click', () => {
  // Toggle the 'active' class on the navigation list
  navList.classList.toggle('active');
});

document.getElementById("signupForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form from submitting the traditional way

  // You can add validation or additional processing here

  // After successful validation or processing
  window.location.href = "dashboard.html"; // Redirect to the dashboard page
});

function showDropdown() {
  document.getElementById('userDropdown').style.display = 'block'; // Show dropdown
}

function hideDropdown() {
  document.getElementById('userDropdown').style.display = 'none'; // Hide dropdown
}

// Toggle password visibility function
function togglePasswordVisibility() {
  const passwordInput = document.getElementById("password");
  const passwordToggleIcon = document.getElementById("passwordToggleIcon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggleIcon.classList.remove("fa-eye");
    passwordToggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    passwordToggleIcon.classList.remove("fa-eye-slash");
    passwordToggleIcon.classList.add("fa-eye");
  }
}

