<?php

/*
Template Name: Contact
*/

get_header();?>
      <div class="main-wrapper ">
         <?php get_template_part('template-parts/content', 'breadcumb'); ?>
         <!-- contact form start -->
         <section class="contact-form-wrap section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div id="contact-form" class="contact__form">
                        <span class="text-color">Send a message</span>
                        <h3 class="text-md mb-4">Contact Form</h3>
                        <?php echo do_shortcode( '[contact-form-7 id="83" title="Megakit Form"]' ); ?>
                     </div>
                  </div>
                  <div class="col-lg-5 col-sm-12">
                     <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>
                        <ul class="address-block list-unstyled">
                           <li>
                              <i class="ti-direction mr-3"></i>North Main Street,Brooklyn Australia
                           </li>
                           <li>
                              <i class="ti-email mr-3"></i>Email: contact@mail.com
                           </li>
                           <li>
                              <i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
                           </li>
                        </ul>
                        <ul class="social-icons list-inline mt-5">
                           <li class="list-inline-item">
                              <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li class="list-inline-item">
                              <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                           </li>
                           <li class="list-inline-item">
                              <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php get_footer();?>