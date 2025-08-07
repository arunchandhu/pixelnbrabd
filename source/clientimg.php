<section id="clients" class="clients">
  <div class="container">
    <div class="service-content work py-5">
      <div class="services-sub-heading">
        <p class="text-center text-md-end">
          We work closely with our clients to build digital experiences that not only look great but also perform exceptionally.
        </p>
      </div>
      <div class="services-heading">
        <h1>Our Clients</h1>
      </div>
    </div>
    
    <div class="swiper clientsSwiper">
      <div class="swiper-wrapper">
        <?php
          // Define an array of image numbers (skip 19 as it's missing)
          $client_images = array_merge(range(1, 18), range(20, 31));
          
          foreach ($client_images as $num) {
              echo '<div class="swiper-slide">
                      <img src="assets/images/client/' . $num . '.webp" loading="lazy" alt="client-img">
                    </div>';
          }
        ?>
      </div>
    </div>
  </div>
</section>
