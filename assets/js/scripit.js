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
