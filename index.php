<?php

/**
 * Template Name:HOME PAGE
 */
?>

<?php include_once('./source/header.php') ?>

<body>

  <!-- MENU -->
  <?php include_once('./source/menu.php') ?>

  <!-- Home -->
  <div id="home" class="home">
    <div class="container">
      <div class="hero-section">

        <div class="hero-content">
          <div class="hero-img">
            <img src="assets/images/char-1.webp" loading="lazy" alt="hero-img">
          </div>
          <div class="hero-text">
            <h1>Welcome to Pixel &amp; Brand</h1>
            <p>
              Your creative partner for digital growth — where strategy meets design to build bold, impactful brands.
            </p>
          </div>
          <form id="subscribeForm" method="POST" action="subscribe.php">
            <input type="email" name="email" placeholder="Enter your mail" autocomplete="off" required />
            <input type="text" name="website" style="display:none" autocomplete="off" />
            <button type="submit">Say Hello!</button>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div
          class="col-lg-4 col-md-6 col-sm-12 text-center pt-5 pt-md-4 d-flex align-items-center justify-content-center">
          <div class="display-social-media">
            <ul>
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
    </div>
  </div>


  <!-- Services -->
  <?php include_once('./source/service.php') ?>
  <div class="p-10"></div>

  <!-- Testimonial -->
  <?php include_once('./source/testimonial.php') ?>

  <div class="p-10"></div>

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="service-content work">
        <div class="services-sub-heading">
          <p>
            Discover how our creative vision and strategic expertise deliver exceptional digital solutions that drive
            real impact and lasting success.
          </p>
        </div>
        <div class="services-heading">
          <h1>Our Works</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-1.webp" alt="" />
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-4.webp" alt="" />
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-5.webp" alt="" />
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-3.webp" alt="" />
        </div>
      </div>
    </div>
  </section>


  <!-- CTA BUTTON -->
  <?php include_once('./source/cta.php') ?>

  <!-- FOOTER -->
  <?php include_once('./source/footer.php') ?>