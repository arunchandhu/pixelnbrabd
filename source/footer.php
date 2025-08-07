<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="footer-logo">
          <a href="index.php"><img src="./assets/images/logo-b.png" alt="" /></a>
          <p>
            Pixel & Brand – Your go-to digital partner for creative design,
            strategic marketing, and custom web & app development to elevate your business.
          </p>
          <div class="social-media">
            <ul class="social-list">
              <li>
                <a href="https://www.facebook.com/pixelnbrand" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/pixel_and_brand/" target="_blank"><i
                    class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/pixel-and-brand-digital-marketing-agency" target="_blank"><i
                    class="fa-brands fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/@pixelandbrand_yt" target="_blank">
                  <i class="fa-brands fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="quick-link">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="agency.php">The Agency</a></li>
            <li><a href="subscriptions.php">Subscriptions </a></li>
            <li class="drop-down"><a href="services.php">What We Do </a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="team.php">Our Team</a></li>
            <!-- <li><a href="clients.php">Our Clients</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="quick-link">
          <h3>Services</h3>
          <ul>
            <li><a href="branding.php">Branding &amp; Creative Design</a></li>
            <li><a href="smm.php">Social Media Management</a></li>
            <li><a href="seo.php">SEO &amp; Content Marketing</a></li>
            <li><a href="webdeveloping.php">Website Design &amp; Development</a></li>
            <li><a href="videoproduction.php">Video Production</a></li>
            <li><a href="digitalmarketing.php">Digital Marketing Strategy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="quick-link">
          <h3>Contact Us</h3>
          <ul>
            <li>
              <i class="fa-solid fa-phone"></i>
              <a href="tel:++918086488003" target="_blank">+91 80864-88003</a>
            </li>
            <li>
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:info@craftrix.com" target="_blank">info@craftrix.com</a>
            </li>
            <li>
              <i class="fa-solid fa-thumbtack"></i>
              <a href="https://maps.app.goo.gl/nxyut9L82QQc8Fbj9" target="_blank">
                Craftrix Consultancy Services Pvt Ltd Udarasiromani Rd, Thiruvananthapuram, Kerala 695010

              </a>
            </li>
        </div>
      </div>
      <hr class="copy-line">
      <div class="col-12 pt-3 text-center">
        <p>&copy; <b id="year"></b> Craftrix Consultancy Services Pvt Ltd . All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<div class="whats-app">
  <a href="https://wa.me/+918086488003?text=Hi%20there%20please%20share%20your%20service%20details...!"
    target="_blank"><img src="assets/images/whatsapp.png" alt=""></a>
</div>

<script src="assets/js/scripit.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".clientsSwiper", {
      slidesPerView: 6,
      spaceBetween: 10,
      loop: true,
      speed: 1000, // Smooth transition (in milliseconds)
      autoplay: {
        delay: 2000, // Time between transitions
        disableOnInteraction: false,
      },
      breakpoints: {
        1024: {
          slidesPerView: 6,
        },
        768: {
          slidesPerView: 4,
        },
        520: {
          slidesPerView: 3,
        },
        320: {
          slidesPerView: 2,
        }
      }
    });
  });
</script>

</body>

</html>