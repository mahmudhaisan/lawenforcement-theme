<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php wp_head(); ?>
</head>



<body class="sub_page">
   <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
         <div class="container">
            <div class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.html">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                     <?php
                     wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ml-auto'
                     ));
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header section -->
   </div>