<?php

get_header();


$slider_args = array(
   'post_type' => 'sliders',
   'posts_per_page' => -1

);

$loop_slides = new WP_Query($slider_args);

while ($loop_slides->have_posts) {
}



echo '<pre>';
print_r($loop_slides);
echo '</pre>';

?>




<section class="slider_section position-relative">
   <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
         </ol>
         <div class="carousel-inner">

            <div class="carousel-item active">
               <div class="row">
                  <div class="col-md-6">
                     <div class="detail-box">
                        <h1>
                           A Perfect Learning Center <br />
                           <span>
                              For Your Kids
                           </span>
                        </h1>
                        <p>
                           It is a long established fact that a reader will be distracted
                           by the readable content of a page when looking at its layout.
                           The point of using Lorem Ipsum is that it has a more-or-less
                           normal distribution of letters, as
                        </p>
                        <div class="btn-box">
                           <a href="" class="btn-1">
                              Read More
                           </a>
                           <a href="" class="btn-2">
                              Contact us
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>

   </div>
</section>





<?php get_template_part('template-parts/content', 'slider'); ?>


<?php get_footer(); ?>