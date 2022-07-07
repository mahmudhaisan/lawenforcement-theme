<?php

/*
Template Name: Home
*/

get_header();?>
      <div class="main-wrapper ">
         <!-- Slider Start -->
         <section class="slider">
            <div class="container">
               <div class="row">
                  <div class="col-lg-9 col-md-10">
                     <div class="block">
                        <span class="d-block mb-3 text-white text-capitalize">Prepare for new future</span>
                        <h1 class="animated fadeInUp mb-5">Our work is <br>presentation of our <br>capabilities.</h1>
                        <a href="#" target="_blank" class="btn btn-main animated fadeInUp btn-round-full" >Get started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Section Intro Start -->
         <section class="section intro">
            <div class="container">
               <div class="row ">
                  <div class="col-lg-8">
                     <div class="section-title">
                        <span class="h6 text-color ">We are creative & expert people</span>
                        <h2 class="mt-3 content-title">We work with business & provide solution to client with their business problem </h2>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-12">
                     <div class="intro-item mb-5 mb-lg-0">
                        <i class="fa fa-address-book color-one"></i>
                        <h4 class="mt-4 mb-3">Modern & Responsive design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="intro-item mb-5 mb-lg-0">
                        <i class="fa fa-building color-one"></i> 
                        <h4 class="mt-4 mb-3">Awarded licensed company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="intro-item">
                        <i class="fa fa-globe color-one"></i>
                        <h4 class="mt-4 mb-3">Build your website Professionally</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Section Intro END -->
         <!-- section Counter Start -->
         <section class="section counter bg-counter">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold text-white">1730</span> +</h3>
                        <p class="text-muted">Project Done</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold text-white">125 </span>M </h3>
                        <p class="text-muted">User Worldwide</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold text-white">39</span></h3>
                        <p class="text-muted">Availble Country</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="counter-item text-center">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold text-white">14</span></h3>
                        <p class="text-muted">Award Winner </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section Counter End  -->
         <!--  Section Services Start -->
         <section class="section service border-top">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-7 text-center">
                     <div class="section-title">
                        <span class="h6 text-color">Our Services</span>
                        <h2 class="mt-3 content-title ">We provide a wide range of creative services </h2>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">

               <?php
                  $args = array(
                     'post_type' => 'services',
                     'posts_per_page' => 6
                  );
                  $query = new WP_Query($args);
                  if($query->have_posts()) {
                     while($query->have_posts()) {
                        $query->the_post();
                     ?>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-item mb-5">
                           <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                           <h4 class="mb-3"><?php the_title();?></h4>
                           <?php the_content();?>
                        </div>
                     </div>
                     <?php
                     }
                  } else {
                     echo 'No Services Found';
                  }
                  wp_reset_postdata();
               ?>
               </div>
            </div>
         </section>
         <!--  Section Services End -->
         <!-- Section Cta Start --> 
         <section class="section cta">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 text-center">
                     <div class="cta-item  bg-white p-5 rounded">
                        <span class="h6 text-color">We create for you</span>
                        <h2 class="mt-2 mb-4">Entrust Your Project to Our Best Team of Professionals</h2>
                        <p class="lead mb-4">Have any project on mind? For immidiate support :</p>
                        <h3><i class="ti-mobile mr-3 text-color"></i>+23 876 65 455</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--  Section Cta End-->
         <!-- Section Testimonial Start -->
         <?php get_template_part('template-parts/content', 'testimonials'); ?>
         <!-- Section Testimonial End -->
         <section class="section latest-blog bg-2">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-7 text-center">
                     <div class="section-title">
                        <span class="h6 text-color">Latest News</span>
                        <h2 class="mt-3 content-title text-white">Latest articles to enrich knowledge</h2>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">


               <?php
                  $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => 3
                  );
                  $query = new WP_Query($args); 

                  if($query->have_posts()) {
                     while($query->have_posts()) {
                        $query->the_post();
                        ?>
                           <div class="col-lg-4 col-md-6 mb-5">
                              <div class="card bg-transparent border-0">
                                 <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid rounded">
                                 <div class="card-body mt-2">
                                    <div class="blog-item-meta">
                                       <a href="#" class="text-white-50"><?php echo get_the_date('D j, Y');?><span class="ml-2 mr-2">/</span></a>

                                       <a href="#"  class="text-white-50">
                                          <?php 
                                             $cat = get_the_category();
                                             echo $cat[0]->name; 
                                          ?>
                                             <span class="ml-2">/</span></a>

                                       <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i><?php 
                                          $user = get_the_author_meta( 'ID' ); 
                                          echo get_the_author_meta( 'display_name', $user );
                                       ?></a>

                                    </div>
                                    <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white "><?php the_title();?></a></h3>
                                    <?php the_excerpt();?>
                                    <a href="<?php the_permalink();?>" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                                 </div>
                              </div>
                           </div>
                        <?php
                     }
                  } else {
                     echo 'No Post Found!';
                  }
                  wp_reset_postdata();
               ?>

               </div>
            </div>
         </section>
<?php get_footer();?>