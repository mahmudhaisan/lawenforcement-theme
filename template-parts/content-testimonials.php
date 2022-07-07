<section class="section testimonial">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7 ">
                     <div class="section-title">
                        <span class="h6 text-color">Clients testimonial</span>
                        <h2 class="mt-3 content-title">Check what's our clients say about us</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row testimonial-wrap">

               <?php
                  $args = array(
                     'post_type' => 'testimonials',
                     'posts_per_page' => -1
                  );
                  $query = new WP_Query($args);
                  if($query->have_posts()) {
                     while($query->have_posts()) {
                        $query->the_post();
                     ?>
                     <div class="testimonial-item position-relative">
                        <i class="fa fa-quote-left text-color"></i>
                        <div class="testimonial-item-content">
                           <div class="testimonial-text"><?php the_content();?></div>
                           <div class="testimonial-author">
                              <h5 class="mb-0 text-capitalize"><?php the_title();?></h5>
                              <p><?php echo get_post_meta(get_the_ID(), 'client_desg', true) ?></p>
                           </div>
                        </div>
                     </div>
                     <?php
                     }
                  } else {
                     echo 'No Testimonials Found';
                  }
                  wp_reset_postdata();
               ?>
               </div>
            </div>
         </section>