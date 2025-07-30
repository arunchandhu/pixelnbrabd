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
            <img src="assets/images/char-1.webp" alt="">
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

  <section id="services" class="services pb-0">
    <div class="container">
      <div class="service-content">
        <div class="services-heading">
          <h1>Our Services</h1>
        </div>
        <div class="services-sub-heading">
          <p>
            End-to-end digital solutions to grow your brand, connect with your audience, and drive real results.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5">
          <div class="service-items">
            <div class="service-list">
              <img src="assets/images/icons/branding.png" alt="" />
              <h3 class="text-center pt-3">Branding &amp; Creative Design</h3>
              <p class="text-center">
                Crafting memorable visual identities, logos, and design assets that reflect your brand’s essence and
                stand out in the market.
              </p>
              <div class="col-12 mt-4 mx-auto text-center">
                <a href="branding.php" class="button cta">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="service-items seo">
            <div class="service-list">
              <img src="assets/images/icons/smm.png" alt="" />
              <h3 class="text-center pt-3">Social Media Management</h3>
              <p class="text-center">
                Building and managing your online presence through engaging content, community interaction, and
                performance tracking.
              </p>
              <div class="col-12 mt-4 mx-auto text-center">
                <a href="smm.php" class="button cta">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="service-items">
            <div class="service-list">
              <img src="assets/images/icons/seo.png" alt="" />
              <h3 class="text-center pt-3">SEO & Content Marketing</h3>
              <p class="text-center">
                Improving search visibility with strategic keywords, quality content, and optimized web structure to
                drive organic growth.
              </p>
              <div class="col-12 mt-4 mx-auto text-center">
                <a href="seo.php" class="button cta">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="service-items">
            <div class="service-list">
              <img src="assets/images/icons/web_dev.png" alt="" />
              <h3 class="text-center pt-3"> Website Design & Development</h3>
              <p class="text-center">
                Custom websites that are visually striking, mobile-friendly, and built for performance, tailored to your
                brand and goals.
              </p>
              <div class="col-12 mt-4 mx-auto text-center">
                <a href="webdeveloping.php" class="button cta">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="service-items">
            <div class="service-list">
              <img src="assets/images/icons/video.png" alt="" />
              <h3 class="text-center pt-3">Video Production</h3>
              <p class="text-center">
                We create high-impact, story-driven videos that connect with your audience and strengthen your brand
                presence online.
              </p>
              <div class="col-12 mt-4 mx-auto text-center">
                <a href="videoproduction.php" class="button cta">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="service-items">
            <div class="service-list">
              <img src="assets/images/icons/content.png" alt="" />
              <h3 class="text-center pt-3">Digital Marketing Strategy</h3>
              <p class="text-center">
                Data-driven marketing plans tailored to your goals—boosting reach, engagement, and conversions across
                all digital platforms.
              </p>
              <div class="col-12 mt-4 mx-auto text-center">
                <a href="digitalmarketing.php" class="button cta">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="p-10"></div>

  <section class="testimonial" id="testimonal">
    <div class="container">
      <div class="col-12 mx-auto">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <div class="d-name pt-5">
            <h1 class="text-center">Testimonial</h1>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-caption">
                <p>
                  Pixel &amp; Brand exceeded our expectations with creative strategies and flawless execution. Their
                  team truly understands how to connect with the audience and drive meaningful business growth.
                </p>
                <img src="assets/images/icons/user.png" alt="Aravind" />
                <div id="image-caption">Aravind</div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>
                  Working with Pixel &amp; Brand was a seamless experience. Their professionalism, creativity, and
                  dedication helped us revamp our brand and increase customer engagement significantly.
                </p>
                <img src="assets/images/icons/user.png" class="img-fluid" alt="Jithu" />
                <div id="image-caption">Jithu</div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>
                  Thanks to Pixel &amp; Brand’s expertise, our digital presence has never been stronger. Their tailored
                  solutions and proactive approach delivered real, measurable results for our business.
                </p>
                <img src="assets/images/icons/user.png" class="img-fluid" alt="Anand" />
                <div id="image-caption">Anand</div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </section>
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
          <img src="assets/images/works/work-1.jpg" alt="" />
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-2.jpg" alt="" />
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-3.jpg" alt="" />
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="works">
          <img src="assets/images/works/work-4.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>


  <!-- CTA BUTTON -->
  <?php include_once('./source/cta.php') ?>

  <!-- FOOTER -->
  <?php include_once('./source/footer.php') ?>