document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent form submission

  // Clear previous error messages
  const errorMessages = document.querySelectorAll(".error-message");
  errorMessages.forEach((msg) => (msg.textContent = ""));

  let isValid = true;

  // Validate Name
  const name = document.getElementById("name").value.trim();
  if (!name) {
    document.getElementById("nameError").textContent = "Name is required.";
    isValid = false;
  }

  // Validate Email
  const email = document.getElementById("email").value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email) {
    document.getElementById("emailError").textContent = "Email is required.";
    isValid = false;
  } else if (!emailRegex.test(email)) {
    document.getElementById("emailError").textContent = "Invalid email format.";
    isValid = false;
  }

  // Validate Phone Number
  const phoneNumber = document.getElementById("phoneNumber").value.trim();
  const phoneRegex = /^\+?[0-9\s\-()]+$/; // Allow international format
  if (!phoneNumber) {
    document.getElementById("phoneError").textContent =
      "Phone number is required.";
    isValid = false;
  } else if (!phoneRegex.test(phoneNumber)) {
    document.getElementById("phoneError").textContent =
      "Invalid phone number format. Include country code if necessary.";
    isValid = false;
  }

  // Validate Message
  const message = document.getElementById("message").value.trim();
  if (!message) {
    document.getElementById("messageError").textContent =
      "Message is required.";
    isValid = false;
  }

  // Update button color if the form is valid
  const submitButton = document.querySelector(
    '.submit-input input[type="submit"]'
  );
  if (isValid) {
    submitButton.style.backgroundColor = "green";
    submitButton.style.color = "white";

    // Optional: Provide visual feedback for form submission
    alert("Form submitted successfully!");
    // Uncomment the next line for standard form submission
    // e.target.submit();
  } else {
    // Reset button color if invalid
    submitButton.style.backgroundColor = "";
    submitButton.style.color = "";
  }
});
