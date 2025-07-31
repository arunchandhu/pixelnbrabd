<?php

/**
 * Template Name:Agency
 */
?>

<?php include_once('./source/header.php') ?>

<body>

  <!-- MENU -->
  <?php include_once('./source/menu.php') ?>
  <!-- Agency -->
  <div class="liquid-glass"></div>
  <button id="scrollBtn" title="Go to top">▲</button>

  <section id="section-banner" class="section-banner display">
    <div class="container">
      <h1>The Agency</h1>
    </div>
  </section>

  <section id="web-developing" class="web-developing service-page ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="about-img">
            <img src="assets/images/about.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="about">
            <h1>Who We Are</h1>
            <p class="text-start text-lg-justify">At Pixel & Brand, our mission has always been simple: to help
              businesses grow by creating meaningful
              digital experiences.
              We believe that behind every successful brand is a story well told, a clear strategy, and designs that
              truly connect with people.</p>
            <div class="p-10"></div>
            <p class="text-start text-lg-justify">The idea to start Pixel & Brand came from a shared passion between a
              group of creative thinkers and
              digital strategists. We noticed that many businesses struggled to find a partner who could combine
              creativity, technology, and marketing all in one place. So, we decided to build that partner ourselves — a
              place where innovation meets results, and where every client’s vision becomes our mission.</p>
            <div class="p-10"></div>
            <p class="text-start text-lg-justify">From day one, we’ve focused on understanding each client’s unique
              goals and crafting tailored solutions
              that not only look great but also deliver real, measurable growth. It’s this personal approach that drives
              us and keeps us excited about every project we take on.</p>
            <div class="p-10"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="service-content py-0 mb-4">
            <div class="services-heading">
              <h1>What Sets Us Apart?</h1>
            </div>
            <div class="services-sub-heading">
              <p>
                We're not just another service provider—we're a results-focused partner. While others rely on empty
                promises and cookie-cutter solutions, we focus on execution, adaptability, and measurable impact. Our
                approach is built on transparency, data-driven strategies, and a relentless commitment to helping your
                business grow. Simply put: we deliver, while others just talk.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="p-10"></div>
        <div class="col-md-4 mb-5">
          <div class="box">
            <h3>Results Over Promises</h3>
            <p>We don’t just talk about what we could do — we show you what we’ve done.
              Every strategy we implement is tied to measurable outcomes like revenue growth,
              customer acquisition, or cost efficiency. Our focus is always on delivering tangible value, not vanity metrics.</p>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="box">
            <h3>Strategy Backed by Data</h3>
            <p>Guesswork has no place in our process. Every decision we make is backed by real-time data, analytics, and proven insights. This allows us to optimize campaigns continuously and make informed choices that drive performance and ROI.</p>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="box">
            <h3>Agile and Adaptive Approach</h3>
            <p>Markets change. So do customer behaviors. We stay flexible and adjust strategies quickly based on performance, trends, or shifts in your industry — ensuring you stay ahead, not just keep up.</p>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="box">
            <h3>Transparent Communication</h3>
            <p>We believe in open, honest communication. You’ll always know where things stand — with clear reporting, regular updates, and full access to performance dashboards. No surprises, no hidden agendas.</p>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="box">
            <h3>Tailored Solutions, Not Templates</h3>
            <p>Your business is unique — your strategy should be too. We take the time to understand your goals, audience, and challenges, then build custom solutions that align with your vision and objectives.</p>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="box">
            <h3>Dedicated Partnership Mindset</h3>
            <p>We don’t see ourselves as a vendor, but as an extension of your team. Your success is our success, and we work closely with you every step of the way — offering proactive support, insights, and strategic input whenever you need it.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
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

  <!-- CTA BUTTON -->
  <?php include_once('./source/cta.php') ?>

  <!-- FOOTER -->
  <?php include_once('./source/footer.php') ?>