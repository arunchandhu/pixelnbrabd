document.addEventListener("DOMContentLoaded", () => {
  // Safe element selection
  const navBar = document.querySelector("nav");
  const navList = document.querySelector(".nav-list ul");
  const toggleBtn = document.querySelector(".toggle");
  const closeBtn = document.querySelector(".close");
  const scrollBtn = document.getElementById("scrollBtn");
  const dropDownList = document.querySelector(".drop-down-list");
  const mobileMenu = document.querySelector(".mobile-menu");

  toggleBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("open");
  });

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navBar.classList.add("color");
    } else {
      navBar.classList.remove("color");
    }
  });

  // Scroll-to-top button
  if (scrollBtn) {
    window.addEventListener("scroll", () => {
      const scrollTop = window.scrollY;
      const docHeight =
        document.documentElement.scrollHeight - window.innerHeight;
      const scrollPercent = docHeight ? scrollTop / docHeight : 0;

      // Show/hide scroll button
      if (scrollTop > 100) {
        scrollBtn.classList.add("show");
      } else {
        scrollBtn.classList.remove("show");
      }

      // Update scroll fill height
      scrollBtn.style.setProperty("--fill-height", `${scrollPercent * 100}%`);
    });

    scrollBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});

// Year
document.getElementById("year").innerHTML = new Date().getFullYear();


// Subscribe form validation
// subscribe-validation.js

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("subscribeForm");
  if (!form) return; // Do nothing if form doesn't exist

  form.addEventListener("submit", function (event) {
    const emailInput = form.querySelector("input[name='email']");
    const honeypotInput = form.querySelector("input[name='website']");

    const email = emailInput?.value?.trim() || "";
    const honeypot = honeypotInput?.value?.trim() || "";

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Check if honeypot is filled (bot)
    if (honeypot !== "") {
      event.preventDefault();
      alert("Bot submission detected.");
      return false;
    }

    // Check for valid email
    if (!emailPattern.test(email)) {
      event.preventDefault();
      alert("Please enter a valid email address.");
      emailInput.focus();
      return false;
    }
  });
});


// Contact page validation
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  if (!form) return; // Exit if form is not present on the page

  form.addEventListener("submit", function (event) {
    // Get form inputs
    const emailInput = form.querySelector("input[name='email']");
    const honeypotInput = form.querySelector("input[name='website']");

    const email = emailInput?.value?.trim() || "";
    const honeypot = honeypotInput?.value?.trim() || "";

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Honeypot check
    if (honeypot !== "") {
      event.preventDefault();
      alert("Bot submission detected.");
      return false;
    }

    // Email validation
    if (!emailPattern.test(email)) {
      event.preventDefault();
      alert("Please enter a valid email address.");
      emailInput.focus();
      return false;
    }
    
    // Optional: You can add other validation here if needed (e.g. phone number pattern)

    // If all checks pass, the form will submit normally
  });
});





// Swiper js


