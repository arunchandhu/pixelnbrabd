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



// Signposting Sliders
document.querySelectorAll('.swiper-signposting').forEach(function (thisSlider) {
    if (!thisSlider) return;

    const container = thisSlider.closest('.row'); // get parent row or container
    const swiper = new Swiper(thisSlider, {
        a11y: {
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
        },
        navigation: {
            nextEl: container.querySelector('.swiperSignpostingNext'),
            prevEl: container.querySelector('.swiperSignpostingPrev'),
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 16,
            },
            576: {
                slidesPerView: 2.2,
                spaceBetween: 16,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 16,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 16,
            },
        },
    });
});

// Optional: Gallery Slider (only if used elsewhere)
document.querySelectorAll('.gallery .swiper-gallery').forEach(function (thisSlider) {
    if (!thisSlider) return;

    const container = thisSlider.closest('.gallery');
    const swiper = new Swiper(thisSlider, {
        a11y: {
            enabled: true
        },
        navigation: {
            nextEl: container.querySelector('.swiperGalleryNext'),
            prevEl: container.querySelector('.swiperGalleryPrev'),
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        pagination: {
            el: container.querySelector('.swiper-pagination'),
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            }
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 16,
            },
        },
    });
});
