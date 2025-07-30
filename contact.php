<?php

/**
 * Template Name:CONTACT
 */
?>

<?php include_once('./source/header.php') ?>

<body>

  <!-- MENU -->
  <?php include_once('./source/menu.php') ?>

  <!-- Contact -->
  <div class="liquid-glass"></div>
  <button id="scrollBtn" title="Go to top">▲</button>

  <div class="liquid-glass"></div>
  <button id="scrollBtn" title="Go to top">▲</button>

  <section id="section-banner" class="section-banner display">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </section>

  <section id="contact" class="service-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto mb-4">
          <div class="message">
            <div class="contact-form">
              <form id="contactForm" method="POST" action="contactform.php">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" id="contactName" placeholder="Name" required autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <input type="email" name="email" id="contactEmail" placeholder="Email Address" required autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <input type="tel" name="phone" id="contactPhone" placeholder="Phone Number" pattern="\d{10}" maxlength="10" required autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <select name="service" id="contactService" required>
                      <option value="" disabled selected hidden>-- Select a service --</option>
                      <option value="branding">Branding</option>
                      <option value="smm">Social Media</option>
                      <option value="seo">SEO</option>
                      <option value="website">Website</option>
                      <option value="video">Video</option>
                      <option value="dms">Digital Strategy</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <input type="text" name="website" style="display:none" autocomplete="off" /> <!-- Honeypot -->
                  <button type="submit">Contact Us</button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto text-center mb-4">
          <div class="p-20"></div>
          <h1>Where We Are? <br> Let's Find Out!</h1>
          <div class="p-20"></div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="contact-info">
            <h3 class="mt-4">Contact Us</h3>
            <ul>
              <li>
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+91 80864-88003" target="_blank">+91 80864-88003</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="contact-info">
            <h3 class="mt-4">Email</h3>
            <ul>
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:info@craftrix.com" target="_blank">info@craftrix.com</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="contact-info">
            <h3 class="mt-4">Address</h3>
            <ul>
              <li>
                <i class="fa-solid fa-thumbtack"></i>
                <a href="#">Pixel and Band Services Pvt Ltd TC 29/655 1, USRA 102,
                  Udarasiromani Rd, Thiruvananthapuram, Kerala 695010</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="map" class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.941301753748!2d76.9633072!3d8.5050806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84612bbfd7669147%3A0x40a2ffa8c0945762!2sCraftrix%20Consultancy%20Services%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1753251058706!5m2!1sen!2sin"></iframe>
  </section>


  <!-- FOOTER -->
  <?php include_once('./source/footer.php') ?>